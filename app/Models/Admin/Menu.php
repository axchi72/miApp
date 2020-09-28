<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['nombre', 'url', 'icono', 'creo', 'actualizo'];
    protected $guarded = ['id'];
}
