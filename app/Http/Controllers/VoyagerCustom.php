<?php

namespace App\Http\Controllers;
use TCG\Voyager\Facades\Voyager;

class VoyagerCustom{

    function Order(){
        $data_types = Voyager::model('DataType')
                            ->where('slug', 'like', "hc%-%")
                            ->orderByRaw("CAST(JSON_EXTRACT(details, '$.hc_order') AS DECIMAL(6,4))")
                            ->get();
        $lastRecord = Voyager::model('DataType')
                        ->orderBy('updated_at', 'DESC')->first();

        return Voyager::view('voyager::historias-clinicas.order', compact('data_types', 'lastRecord'));
    }

}
?>
