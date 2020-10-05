<?php

namespace App\Models\Seguridad;

use App\Models\Admin\Rol;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $fillable = [
        'usuario','password','nombre', 'correo', 'celular', 'foto', 'creo', 'actualizo',
    ];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rols');
    }

    public function setSession($roles)
    {
        if(count($roles) == 1) {
            Session::put(
                [
                    'rol_id' => $roles[0]['id'],
                    'rol_nombre' => $roles[0]['nombre'],
                    'usuario_id' => $this->id,
                    'usuario' => $this->usuario,
                    'nombre' => $this->nombre,
                ]
            );
        }else{

        }
    }

    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    }
}
