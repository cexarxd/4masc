<?php

namespace App\Services;
use App\Razadog;


class Razas_perros{
    public function get()
    {
        $dog = Razadog::get();
        $dogArray[''] = 'Selecciona la raza de su perro';
        foreach ($dog as $razdog){
            $dogArray[$razdog->razas_id_perros] = $razdog->nombre;
    }   
    return $dogArray;
    }
}
