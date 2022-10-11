<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;

class ItemImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Item([
            'sn'             => $row[0], 
            'name'           => $row[1],
            'sku'            => $row[2],
            'description'    => $row[3],
            'sale_price'     => $row[4], 
            'purchase_price' => $row[5],
            'quantity'       => $row[6],
            'category'       => $row[7], 
            'tax'            => $row[8],
            
        ]);
    }
}
