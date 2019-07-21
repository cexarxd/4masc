<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
    //relacion muchos a uno
    public function estado()
    {
        return $this->belongsTo('App\Mascotas', 'estado_id');
    }
}
