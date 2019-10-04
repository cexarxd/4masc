<?php

namespace App\Services;
use App\Temperamento;


class Temperamentos{
    public function get()
    {
        $temp = Temperamento::get();
        $tempArray[''] = 'Es agresiv@?';
        foreach ($temp as $to){
            $tempArray[$to->temperamentos_id] = $to->nombre;
    }   
    return $tempArray;
    }
}
