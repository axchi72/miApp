<?php

namespace App\Models\Parametrizacion;

use App\Models\Afiliado;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['nombre','departamento_id'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

}
