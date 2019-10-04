<?php

namespace App\Services;
use App\Especie;


class Especies{
    public function get()
    {
        $especies = Especie::get();
        $especiesArray[''] = 'Selecciona la Especie |solo perros y gatos segun la ley|';
        foreach ($especies as $esp){
            $especiesArray[$esp->especies_id] = $esp->nombre;
    }
    return $especiesArray;
    }
}