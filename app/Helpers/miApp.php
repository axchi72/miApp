<?php

use App\Models\Admin\Permiso;

if(!function_exists('getShorterString')){
    function getShorterString($text, $lengh=null)
    {
        $formatedString = ucwords($text);

        if ($lengh != null) {
            if(strlen($formatedString) <= $lengh){
                return$formatedString;
            }else{
                $y=substr($formatedString, 0, $lengh) . '...';
                return $y;
            }
        } else {
            return $formatedString;
        }

    }
}

if (!function_exists('getMenuActivo')) {
    function getMenuActivo($ruta)
    {
        if (request()->is($ruta) || request()->is($ruta . '/*')) {
            return 'active';
        } else {
            return '';
        }
    }
}

if (!function_exists('canUser')) {
    function can($permiso, $redirect = true)
    {
        if (session()->get('rol_nombre') == 'Super administrador') {
            return true;
        } else {
            $rolId = session()->get('rol_id');
            $permisos = Permiso::whereHas('roles', function ($query) {
                $query->where('rol_id', session()->get('rol_id'));
            })->get()->pluck('slug')->toArray();
            //dd($permisos);
            if (!in_array($permiso, $permisos)) {
                if ($redirect) {
                    if (!request()->ajax())
                        return redirect()->route('denegado')->with('mensaje', 'No tienes permisos para entrar en este modulo')->send();
                    abort(403, 'No tiene permiso');
                } else {
                    return false;
                }
            }
            return true;
        }
    }
}


