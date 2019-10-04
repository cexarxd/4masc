<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable = [
        'mascotas_id', 'nombre','password','color_id','especie_id','raza_id_perros','sexo_id','antirrabica_id','temperamento_id','antirrabica_id','esteril_id','adopcion_id','users_cc','raza_id_gatos','foto',
    ];

    protected $table = 'mascotas';
    //relacion uno a muchos
    public function colores(){
        return $this->hasMany('App\Color');
    }
    //relacion uno a muchos
    public function especies(){
        return $this->hasMany('App\Especie');
    }
    //relacion uno a muchos
    public function razas_perros(){
        return $this->hasMany('App\Razadog');
    }
    //relacion uno a muchos
    public function razas_gatos(){
        return $this->hasMany('App\Razacat');
    }
    //relacion muchos a uno
    public function sexos(){
        return $this->belongsTo('App\Sexo', 'sexo_id');
    }
    //relacion uno a muchos
    public function antirrabicas(){
        return $this->hasMany('App\Antirrabica');
    }
    //relacion uno a muchos
    public function temperamentos(){
        return $this->hasMany('App\Temperamento');
    }
    //relacion uno a muchos
    public function esteriles(){
        return $this->hasMany('App\Esteril');
    }
    //relacion uno a muchos
    public function estados(){
        return $this->hasMany('App\Estado');
    }
    //relacion muchos a uno
    public function user()
    {
        return $this->belongsTo('App\User', 'users_cc');
    }
    //relacion muchos a uno
   
}
