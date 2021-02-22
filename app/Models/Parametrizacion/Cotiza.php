<?php

namespace App\Models\Parametrizacion;

use App\Models\Afiliado;
use Illuminate\Database\Eloquent\Model;

class Cotiza extends Model
{
    protected $fillable = ['nombre','jubilados', 'bank_main','alternate', 'normal', 'ordering', 'generator'];

    public function afiliados()
    {
        return $this->hasMany(Afiliado::class);
    }
}
