<?php

namespace App\Models;

use App\Models\Parametrizacion\Banco;
use App\Models\Parametrizacion\Cotiza;
use App\Models\Parametrizacion\Cuotas;
use App\Models\Parametrizacion\Deduccion;
use App\Models\Parametrizacion\Departamento;
use App\Models\Parametrizacion\Municipio;
use App\Models\Parametrizacion\Slaboral;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Afiliado extends Model
{
    protected $guarded = ['id'];

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

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function banco()
    {
        return $this->belongsTo(Banco::class);
    }

    public function deduccions()
    {
        return $this->hasMany(Deduccion::class);
    }

    public function cuotas()
    {
        return $this->hasMany(Cuotas::class);
    }
    public function slaboral()
    {
        return $this->belongsTo(Slaboral::class);
    }

    public function cotiza()
    {
        return $this->belongsTo(Cotiza::class);
    }

    public function scopeId($query, $id)
    {
        if($id)
            return $query->where('id', 'LIKE', "%$id%");
    }
    public function scopeIdentidad($query, $identidad)
    {
        if($identidad)
            return $query->where('identidad', 'LIKE', "%$identidad%");
    }
    public function scopeNombre($query, $nombre)
    {
        if($nombre)
            return $query->where('nombre', 'LIKE', "%$nombre%");
    }

    public function scopeApellido($query, $apellido)
    {
        if($apellido)
            return $query->where('apellido', 'LIKE', "%$apellido%");
    }




}
