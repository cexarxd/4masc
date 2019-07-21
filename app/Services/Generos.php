<?php

namespace App\Services;
use App\Genero;

class Generos{
    public function get()
    {
        $generos = Genero::get();
        $generosArray[''] = 'Selecciona un Genero';
        foreach ($generos as $user){
            $generosArray[$user->generos_id] = $user->nombre;

    }
    return $generosArray;
    }
}
