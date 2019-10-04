<?php

namespace App\Services;
use App\Antirrabica;


class Antirrabicas{
    public function get()
    {
        $rabi = Antirrabica::get();
        $rabiArray[''] = 'Esta vacunado con antirrabica?';
        foreach ($rabi as $ca){
            $rabiArray[$ca->antirrabicas_id] = $ca->nombre;
    }   
    return $rabiArray;
    }
}
