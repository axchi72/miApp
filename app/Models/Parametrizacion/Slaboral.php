<?php

namespace App\Models\Parametrizacion;

use App\Models\Afiliado;
use Illuminate\Database\Eloquent\Model;

class Slaboral extends Model
{
    protected $fillable = ['nombre'];

    public function afiliados()
    {
        return $this->hasMany(Afiliado::class);
    }
}
