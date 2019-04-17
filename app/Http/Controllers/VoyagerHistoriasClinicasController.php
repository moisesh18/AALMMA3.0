<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Events\BreadDataUpdated;

class VoyagerHistoriasClinicasController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{

    public function edit(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        $dataTypeContent = array();
        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses($model))) {
                $model = $model->withTrashed();
            }
            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope'.ucfirst($dataType->scope))) {
                $model = $model->{$dataType->scope}();
            }
            array_push($dataTypeContent,call_user_func([$model, 'findOrFail'], $id));
        } else {
            // If Model doest exist, get data from table name
            array_push($dataTypeContent,DB::table($dataType->name)->where('id', $id)->first());
        }

        $dataType = Voyager::model('DataType')
                        ->where('slug', 'like', "hc_%")
                        ->orWhere('slug', 'like', "{$dataTypeContent[0]->tipo}_%")
                        ->orderByRaw('cast(display_name_singular as int) ASC')
                        ->get();

        foreach($dataType as $dataTypes){
            foreach ($dataTypes->editRows as $key => $row) {
                $dataTypes->editRows[$key]['col_width'] = isset($row->details->width) ? $row->details->width : 100;
            }

            array_push($dataTypeContent, (strlen($dataTypes->model_name) != 0)
                    ? new $dataTypes->model_name()
                    : false
            );
            // If a column has a relationship associated with it, we do not want to show that field
            $this->removeRelationshipField($dataTypes, 'edit');

            // Check permission
            $this->authorize('edit', $dataTypeContent);
        }

        $view = 'voyager::bread.edit-add';

        if (view()->exists("voyager::$slug.edit-add")) {
            $view = "voyager::$slug.edit-add";
        }

        return Voyager::view($view, compact('dataType', 'dataTypeContent'));
    }

    // POST BR(E)AD
    public function update(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Compatibility with Model binding.
        $id = $id instanceof Model ? $id->{$id->getKeyName()} : $id;

        $model = app($dataType->model_name);
        if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope'.ucfirst($dataType->scope))) {
            $model = $model->{$dataType->scope}();
        }
        if ($model && in_array(SoftDeletes::class, class_uses($model))) {
            $data = $model->withTrashed()->findOrFail($id);
        } else {
            $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);
        }

        // Check permission
        $this->authorize('edit', $data);

        // Validate fields with ajax
        $val = $this->validateBread($request->input('hc-historias-clinicas'), $dataType->editRows, $dataType->name, $id)->validate();

        $hc = \App\HcHistoriasClinica::find($id);
        dd($hc);
        //$this->insertUpdateData($request, $slug, $dataType->editRows, $data);

        //event(new BreadDataUpdated($dataType, $data));

        return redirect()
        ->route("voyager.{$dataType->slug}.index")
        ->with([
            'message'    => __('voyager::generic.successfully_updated')." {$dataType->display_name_singular}",
            'alert-type' => 'success',
        ]);
    }

    public static function FormArray($field, $slug, $htmlInput){
        return str_replace(
            'name="'. $field .'"'
            , 'name="'. $slug .'['. $field . ']"'
            , $htmlInput);
    }
}
