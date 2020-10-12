<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Documento extends Model
{
    protected $fillable = ['nombre','enlace'];

    public static function setEnlace($enlace, $actual = false)
    {
        if ($enlace) {
            if($actual) {
                Storage::disk('public')->delete("img/documentos/$actual");
            }
            $pdfName = Str::random(20) . '.pdf';
            Storage::disk('public')->put("img/documentos/$pdfName", null);
            return $pdfName;

        } else {
            return false;
        }

    }
}
