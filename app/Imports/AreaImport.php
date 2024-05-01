<?php

namespace App\Imports;

use App\Models\Area;
use Maatwebsite\Excel\Concerns\ToModel;

class AreaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Area([
            'ao_name'     => $row[2],
            'ro'          => $row[1],
            'wo'          => $row[0],
            'status'      => 'Active',
        ]);
    }
}
