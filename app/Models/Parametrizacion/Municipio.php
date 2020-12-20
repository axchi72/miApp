<?php

namespace App\Models\Parametrizacion;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['nombre','departamento_id'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
