<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class Escala extends AbstractHandler
{
    protected $codename = 'Escala';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('custom_formfields.escala', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}
