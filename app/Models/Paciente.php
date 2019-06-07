<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $dates = [
        'fecha_de_nacimiento'
    ];

    public $additional_attributes = [
        'full_name'
        , 'isFemale'];

    public function getFullNameAttribute()
    {
        return "{$this->nombre} {$this->apellido_paterno} {$this->apellido_materno}";
    }

        public function getSsFemaleAttribute()
    {
        return $this->sexo ? true : false ;
    }

}
