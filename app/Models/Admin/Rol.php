<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = ['nombre','creo', 'actualizo'];
    protected $guarded = ['id'];
}
