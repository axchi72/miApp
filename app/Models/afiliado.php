<?php

namespace App\Models;

use App\Models\Parametrizacion\Slaboral;
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

    public function scopeIdentidad($query, $identidad)
    {
        if($identidad)
            return $query->where('card_id', 'LIKE', "%$identidad%");
    }

    public function scopeAfiliacion($query, $afiliacion)
    {
        if($afiliacion)
            return $query->where('id', 'LIKE', "%$afiliacion%");
    }

    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('first_name', 'LIKE', "%$name%");
    }

    public function scopeLastName($query, $lastName)
    {
        if($lastName)
            return $query->where('last_name', 'LIKE', "%$lastName%");
    }

    public function slaboral()
    {
        return $this->belongsTo(Slaboral::class);
    }


}
