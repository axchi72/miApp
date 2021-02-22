<?php

namespace App\Models\Parametrizacion;

use App\Models\Afiliado;
use Illuminate\Database\Eloquent\Model;

class Deduccion extends Model
{
    protected $guarded = ['id'];

    public function afiliado()
    {
        return $this->belongsTo(Afiliado::class);
    }

    public function cuenta()
    {
        return $this->belongsTo(Cuenta::class);
    }
}
