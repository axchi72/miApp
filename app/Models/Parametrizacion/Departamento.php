<?php

namespace App\Models\Parametrizacion;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['nombre'];

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }
}
