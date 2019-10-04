<?php

namespace App\Services;
use App\Estado;


class Estados{
    public function get()
    {
        $estado = Estado::get();
        $estadoArray[''] = 'En que estado esta?';
        foreach ($estado as $esta){
            $estadoArray[$esta->estados_id] = $esta->nombre;
    }   
    return $estadoArray;
    }
}
