<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class afiliado extends Model
{
    protected $fillable = ['identidad', 'nombre', 'afiliacion',  'foto'];
}
