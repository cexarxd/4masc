<?php

namespace App\Services;
use App\Razacat;


class Razas_gatos{
    public function get()
    {
        $cat = Razacat::get();
        $catArray[''] = 'Selecciona la raza de su gato';
        foreach ($cat as $razcat){
            $catArray[$razcat->razas_id_gatos] = $razcat->nombre;
    }   
    return $catArray;
    }
}
