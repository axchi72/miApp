<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Afiliado extends Model
{
    protected $fillable = ['identidad', 'nombre', 'foto', 'afiliacion', 'escalafon','lnacimiento','fnacimiento','email','celular','slaboral','cotiza','banco','cuenta','departamento','municipio','titulo','centro','admon','lugar','centrod','admond','lugard'];

    public static function setFoto($foto, $actual = false)
    {
        if ($foto) {
            if($actual) {
                Storage::disk('public')->delete("img/afiliados/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $imagen = Image::make($foto)->encode('jpg', 75);
            $imagen->resize(530, 470, function ($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put("img/afiliados/$imageName", $imagen->stream());
            return $imageName;

        } else {
            return false;
        }

    }
}
