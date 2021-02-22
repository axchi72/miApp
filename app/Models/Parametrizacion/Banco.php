<?php

namespace App\Models\Parametrizacion;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $guarded = ['id'];

    public function afiliados()
    {
        return $this->hasMany(Afiliado::class);
    }
}
