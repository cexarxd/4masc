<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;
/*use Illuminate\Contracts\Auth\MustVerifyEmail;*/
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cedula','direccion','telefono','apellido','genero_id',
    ];

    /**
     * Los atributos que se deben ocultar para las matrices.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Los atributos que deben ser convertidos a tipos nativos.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     /**
     * Enviar la notificación de restablecimiento de contraseña.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
    //relacion uno a muchos
    public function mascota(){
       return $this->hasMany('App\Mascota');
    }
    //relacion muchos a uno
    public function generos()
    {
        return $this->hasMany('App\Genero');
    }

}
