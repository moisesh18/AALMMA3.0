<?php

use App\hcTables;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\Permission;

class GenerateCascade extends Migration
{

    public $allTables;
    public $tipos;
    public $itsNecesaryIdontKnowWhy;

    public function __construct(){
        $this->allTables = new hcTables();
        $this->allTables = $this->allTables->names;
        $this->tipos = array("hcg_", "hca_", "hcp_", "hc_", "an_", "pe_", "ev_", "_");
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach($this->allTables as $hcTable){
            $this->itsNecesaryIdontKnowWhy = $hcTable;

            //CREATE TABLES
            Schema::dropIfExists($hcTable);
            Schema::create($hcTable, function($table) {
                $table->increments('id');
                $table->timestamps();
                if(
                    $this->itsNecesaryIdontKnowWhy  != 'pacientes'
                    && $this->itsNecesaryIdontKnowWhy != 'historias_clinicas'
                    && $this->itsNecesaryIdontKnowWhy != 'nucleos'
                ){
                    $table->unsignedInteger('historias_clinica_id');
                    $table->foreign('historias_clinica_id')
                        ->references('id')
                        ->on('historias_clinicas')
                        ->onDelete('cascade');
                }
            });

            //CREATE DATATYPE
            $slug = $this->slug($this->itsNecesaryIdontKnowWhy);
            $singleName = $this->singleName($this->itsNecesaryIdontKnowWhy);
            $modelName = $this->modelName($this->itsNecesaryIdontKnowWhy);
            $dataType = $this->dataType('slug',$slug);
            $dataType->fill([
                'name'                  => $this->itsNecesaryIdontKnowWhy,
                'display_name_singular' => $singleName,
                'display_name_plural'   => $singleName,
                'icon'                  => 'voyager-person',
                'model_name'            => "App\Models\\".str_singular($modelName),
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();


            Permission::generateFor($this->itsNecesaryIdontKnowWhy);

            // //CREATE FORMFIELDS
            $columns = array(
                'id'
                , 'created_at'
                , 'updated_at'
                , 'historias_clinica_id'
            );
            for ($i=0; $i < count($columns); $i++) {
                $dataRow = $this->dataRow($dataType, $columns[$i]);
                if(
                    $columns[$i] == 'historias_clinica_id'
                    && $dataRow->name == 'pacientes'
                    && $dataRow->name == 'historias_clinicas'
                    && $dataRow->name == 'nucleos'
                ){
                    continue;
                }
                $dataRow->fill([
                    'type'         => (strpos($columns[$i], 'id')) ? "timestamp" : "number",
                    'display_name' => $columns[$i],
                    'required'     => 1,
                    'browse'       => (strpos($columns[$i], 'id')) ? 1 : 0,
                    'read'         => 0,
                    'edit'         => 0,
                    'add'          => 0,
                    'delete'       => 0,
                    'order'        => $i,
                ])->save();
            }

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        foreach(array_reverse($this->allTables) as $hcTable){
            Schema::dropIfExists($hcTable);
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $hcTable)));
            DataType::where('slug', $slug)->delete();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

    protected function slug($str){
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $str)));
    }

    protected function singleName($str){
        return ucwords(ltrim(str_replace($this->tipos, " ", $str)));
    }

    protected function modelName($str){
        return str_replace(' ','',ltrim(ucwords(str_replace('_', " ", $str))));
    }
}
