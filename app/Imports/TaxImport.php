<?php

namespace App\Imports;

use App\Models\Tax;
use Maatwebsite\Excel\Concerns\ToModel;

class TaxImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tax([
            'sn'             => $row[0], 
            'name'           => $row[1],
            'rate'           => $row[2],
            'type'           => $row[3],
            
        ]);
    }
}
