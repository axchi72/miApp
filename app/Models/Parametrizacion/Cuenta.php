<?php

namespace App\Models\Parametrizacion;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $guarded = ['id'];

    public function deduccions()
    {
        return $this->hasMany(Deduccion::class);
    }
}
