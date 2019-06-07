<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class Conditional extends AbstractHandler
{
    protected $codename = 'Condicional';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('custom_formfields.conditional', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}
