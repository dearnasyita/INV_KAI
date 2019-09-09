<?php

namespace App\Exports;

use App\ModelInventaris;
use Maatwebsite\Excel\Concerns\FromCollection;

class InventarisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ModelInventaris::all();
    }
}
