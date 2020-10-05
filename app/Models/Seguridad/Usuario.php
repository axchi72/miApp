<?php

namespace App\Models\Seguridad;

use App\Models\Admin\Rol;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
        Session::put([
            'usuario' => $this->usuario,
            'usuario_id' => $this->id,
            'nombre_usuario' => $this->nombre,
            'foto' => $this->foto
        ]);
        if (count($roles) == 1) {
            Session::put(
                [
                    'rol_id' => $roles[0]['id'],
                    'rol_nombre' => $roles[0]['nombre']
                ]
            );
        } else {
            Session::put('roles', $roles);
        }
    }

    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    }

    public static function setFoto($foto, $actual = false)
    {
        if ($foto) {
            if ($actual) {
                Storage::disk('public')->delete("img/usuarios/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $imagen = Image::make($foto)->encode('jpg', 75);
            $imagen->resize(530, 470, function ($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put("img/usuarios/$imageName", $imagen->stream());
            return $imageName;
        } else {
            return false;
        }
    }
}
