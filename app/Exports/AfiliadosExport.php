<?php

namespace App\Exports;

use App\Models\Afiliado;
use Maatwebsite\Excel\Concerns\FromCollection;

class AfiliadosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Afiliado::all();
    }
}
