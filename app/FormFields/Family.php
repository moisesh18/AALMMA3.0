<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class Family extends AbstractHandler
{
    protected $codename = 'Familia';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('custom_formfields.family', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}
