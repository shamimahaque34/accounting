<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'sn'          => $row[0], 
            'name'        => $row[1],
            'email'       => $row[2],
            'phone'       => $row[3],
            'website'     => $row[4], 
            'tax_number'  => $row[5],
            'currency_id' => $row[6],
            'category'    => $row[7], 
            'town'        => $row[8],
            'postal_code' => $row[9],
            'state'       => $row[10],
            'country'     => $row[11],
        ]);
    }
}
