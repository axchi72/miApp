<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable = ['nombre', 'slug', 'createdby', 'updatedby'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'permiso_rols');
    }
}
