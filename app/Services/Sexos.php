<?php

namespace App\Services;
use App\Sexo;


class Sexos{
    public function get()
    {
        $sex = Sexo::get();
        $sexArray[''] = 'Selecciona el sexo de tu mascota';
        foreach ($sex as $sexpet){
            $sexArray[$sexpet->sexos_id] = $sexpet->nombre;
    }   
    return $sexArray;
    }
}
