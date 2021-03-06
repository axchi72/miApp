<?php

namespace App\Models\Parametrizacion;

use App\Models\Afiliado;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['nombre'];

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }

    public function afiliados()
    {
        return $this->hasMany(Afiliado::class);
    }
}
