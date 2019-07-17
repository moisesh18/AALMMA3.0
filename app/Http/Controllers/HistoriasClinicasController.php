<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;

class HistoriasClinicasController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{

    public function __construct(){
        $this->defaultRelation = "historias_clinica_id";
        $this->defaultSlug = "historias-clinicas";
        $this->defaultModelName = 'historias_clinicas';
        $this->defaultModel = app("App\Models\HistoriasClinica");
        $this->defaultDatatype = Voyager::model('DataType')
                            ->where('slug', '=', $this->defaultSlug)
                            ->first();
    }

    //***************************************
    //
    //                   /\
    //                  /  \
    //                 / /\ \
    //                / ____ \
    //               /_/    \_\
    //
    //
    // Add a new item of our Data Type BRE(A)D
    //
    //****************************************
    public function store(Request $request)
    {
        $dataType = $this->defaultDatatype;

        // Check permission
        $this->authorize('add', app($dataType->model_name));
        $request->merge($request->input($this->defaultSlug));
        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows)->validate();
        $data = $this->insertUpdateData($request, $this->defaultSlug, $dataType->addRows, new $dataType->model_name());
        event(new BreadDataAdded($dataType, $data));

        $allDataTypes = $this->HCDataTypes($data->tipo,2);
        foreach($allDataTypes as $dataType){
            if($dataType->slug == $this->defaultSlug){
                continue;
            }
            $model = app($dataType->model_name);
            $model->forceCreate([$this->defaultRelation => $data->id]);
            event(new BreadDataAdded($dataType, $model));
        }

        return redirect()
        ->route("voyager.{$this->defaultSlug}.index")
        ->with([
                'message'    => __('voyager::generic.successfully_added_new')." {$this->defaultModel->first()->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }


    //***************************************
    //                _____
    //               |  __ \
    //               | |__) |
    //               |  _  /
    //               | | \ \
    //               |_|  \_\
    //
    //  Read an item of our Data Type B(R)EAD
    //
    //****************************************

    public function show(Request $request, $id)
    {
        $dataTypeContent[$this->defaultModelName] = $this->defaultModel->findOrFail($id);
        $allDataTypes = $this->HCDataTypes($dataTypeContent[$this->defaultModelName]->tipo,3);
        foreach($allDataTypes as $dataType){
            if($dataType->slug != $this->defaultSlug){
                $model = app($dataType->model_name);
                if (in_array($dataType->name, array('pacientes', 'nucleos'))) {
                    $relationshipName = str_singular($dataType->name)."_id";
                    $currentDataType = $model->where('id', '=', $dataTypeContent[$this->defaultModelName]->$relationshipName )->firstOrFail();
                }else{
                    $currentDataType = $model->where($this->defaultRelation, '=', $id)->firstOrFail();
                }
                $dataTypeContent[$dataType->name]= $currentDataType;
            }

            // If a column has a relationship associated with it, we do not want to show that field
            $this->removeRelationshipField($dataType, 'edit');

            // Check permission
            //$this->authorize('edit', $dataTypeContent[$currentDataType->slug]);
        }
        $view = 'voyager::bread.edit-add';
        if (view()->exists("voyager::$this->defaultSlug.{$dataTypeContent[$this->defaultModelName]->tipo}")) {
            $view = "voyager::$this->defaultSlug.{$dataTypeContent[$this->defaultModelName]->tipo}";
        }

         return Voyager::view($view, array('dataTypes' => $allDataTypes, 'd' => $dataTypeContent));
    }

    //***************************************
    //                ______
    //               |  ____|
    //               | |__
    //               |  __|
    //               | |____
    //               |______|
    //
    //  Edit an item of our Data Type BR(E)AD
    //
    //****************************************
    public function edit(Request $request, $id)
    {
        $dataTypeContent = array($this->defaultModel->findOrFail($id));
        $allDataTypes = $this->HCDataTypes($dataTypeContent[0]->tipo,1);
        foreach($allDataTypes as $dataType){
            if($dataType->slug != $this->defaultSlug){
                $model = app($dataType->model_name);

                array_push($dataTypeContent,$model->where($this->defaultRelation, '=', $id)->firstOrFail());

                foreach ($dataType->editRows as $key => $row) {
                    $dataType->editRows[$key]['col_width'] = isset($row->details->width) ? $row->details->width : 100;
                }
            }

            // If a column has a relationship associated with it, we do not want to show that field
            $this->removeRelationshipField($dataType, 'edit');

            // Check permission
            $this->authorize('edit', $dataTypeContent);
        }

        $view = 'voyager::bread.edit-add';

        if (view()->exists("voyager::{$this->defaultSlug}.edit-add")) {
            $view = "voyager::{$this->defaultSlug}.edit-add";
        }

        return Voyager::view($view, array('dataTypes' => $allDataTypes, 'dataTypeContents' => $dataTypeContent, 'defaultSlug'=> $this->defaultSlug));
    }

    // POST BR(E)AD
    public function update(Request $request, $id)
    {
        $dataTypeContent = array($this->defaultModel->findOrFail($id));
        $allDataTypes = $this->HCDataTypes($dataTypeContent[0]->tipo,1);
        $i = 0;
        foreach($allDataTypes as $dataType){
            echo $i;
            echo $dataType->slug;
            if($dataType->name == $this->defaultModelName){
                continue;
            }
            $newRequest = $request->duplicate();
            try {
                $newRequest->request->replace($newRequest->input($dataType->slug));
            } catch (\Throwable $th) {
                continue;
            }
            $newRequest->merge(array($this->defaultRelation => $id));

            // Compatibility with Model binding.
            $id = $id instanceof Model ? $id->{$id->getKeyName()} : $id;

            $model = app($dataType->model_name);
            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope'.ucfirst($dataType->scope))) {
                $model = $model->{$dataType->scope}();
            }


            $data = call_user_func([$dataType->model_name, 'findOrFail'], $newRequest->id);
            // Check permission
            $this->authorize('edit', $data);

            foreach($dataType->editRows as $row){
                if(in_array($row->type, array('Familia', 'Escala', 'JSON'))){
                   $row->type = 'select_multiple';
                }
                else if(in_array($row->type, array('Conditional'))){
                   $row->type = 'text';
                }
            }
            // Validate fields with ajax
            $val = $this->validateBread($newRequest->all(), $dataType->editRows, $dataType->name, $id)->validate();

            $this->insertUpdateData($newRequest, $dataType->slug, $dataType->editRows, $data);
            $i++;
            event(new BreadDataUpdated($dataType, $data));
        }

        return redirect()
        ->route("voyager.{$this->defaultSlug}.index")
        ->with([
            'message'    => __('voyager::generic.successfully_updated')." {$this->defaultModel->first()->display_name_singular}",
            'alert-type' => 'success',
        ]);
    }

    public static function FormArray($field, $slug, $htmlInput){
        if (preg_match('/name="\w+\[?(\w+)\]?"/', $htmlInput)) {
            return preg_replace(
                '/name="\w+\[?(\w+)\]?"/'
                , 'name="'. $slug .'['. $field . ']"'
                , $htmlInput);
        }else{
            return preg_replace(
                '/name="\w+\[?(\w+)?\]?"/'
                , 'name="'. $slug .'['. $field . '][]"'
                , $htmlInput);
        }

    }

    public function HCDataTypes($str, $default){
        if($default==1){
            $data_types = Voyager::model('DataType')
                            ->where('slug', '=', "{$this->defaultSlug}")
                            //->Orwhere('slug', 'like', "hc-%")
                            ->OrWhere('slug', 'like', "%{$str}-%")
                            ->orderByRaw("CAST(JSON_EXTRACT(details, '$.hc_order') AS DECIMAL(6,4))");
        }else if ($default==2){
            $data_types = Voyager::model('DataType')
                            //->where('slug', 'like', "hc-%")
                            ->orWhere('slug', 'like', "%{$str}-%")
                            ->orderByRaw("CAST(JSON_EXTRACT(details, '$.hc_order') AS DECIMAL(6,4))");
        }else if ($default==3){
            $data_types = Voyager::model('DataType')
                            ->where('slug', '=', "{$this->defaultSlug}")
                            ->Orwhere('name', '=', "nucleos")
                            ->Orwhere('name', '=', "pacientes")
                            //->Orwhere('slug', 'like', "hc-%")
                            ->OrWhere('slug', 'like', "%{$str}-%")
                            ->orderByRaw("CAST(JSON_EXTRACT(details, '$.hc_order') AS DECIMAL(6,4))");
        }

        //Las notas de evolución no necesitan EVALUACIONES INICIALES, INTERROGATORIO POR SISTEMAS
        if($str == 'notas'){
            $data_types->OrWhere(function($query){
                $query->Where('slug', 'LIKE', "hc-%")
                      ->Where(function($query){
                          $query->Where('slug', 'NOT LIKE', "%iniciales%");
                          $query->Where('slug', 'NOT LIKE', "%interrogatorio%");
                      });
            });
        }else{
            $data_types->orWhere('slug', 'like', "hc-%");
        }

        return $data_types->get();
    }
}
