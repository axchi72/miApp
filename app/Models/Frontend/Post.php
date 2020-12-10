<?php

namespace App\Models\Frontend;

use App\Models\Seguridad\Usuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Post extends Model
{
    protected $fillable = ['titulo', 'icono', 'contenido', 'foto', 'usuario_id'];

    public function user()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public static function setFoto($foto, $actual = false)
    {
        if ($foto) {
            if($actual) {
                Storage::disk('public')->delete("img/posts/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $imagen = Image::make($foto)->encode('jpg', 75);
            $imagen->resize(530, 470, function ($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put("img/posts/$imageName", $imagen->stream());
            return $imageName;

        } else {
            return false;
        }

    }
}
