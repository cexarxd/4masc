<?php

namespace App\Services;
use App\Color;

class Colores{
    public function get()
    {
        $colores = Color::get();
        $coloresArray[''] = 'Selecciona un color';
        foreach ($colores as $col){
            $coloresArray[$col->colores_id] = $col->nombre;

    }
    return $coloresArray;
    }
}
