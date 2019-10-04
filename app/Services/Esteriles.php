<?php

namespace App\Services;
use App\Esteril;


class Esteriles{
    public function get()
    {
        $esteril = Esteril::get();
        $esterilArray[''] = 'Es Esteril?';
        foreach ($esteril as $ril){
            $esterilArray[$ril->esteriles_id] = $ril->nombre;
    }   
    return $esterilArray;
    }
}
