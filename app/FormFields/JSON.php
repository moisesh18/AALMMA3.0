<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class JSON extends AbstractHandler
{
    protected $codename = 'JSON';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('custom_formfields.json', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}
