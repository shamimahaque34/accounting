<?php

namespace App\Imports;

use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\ToModel;

class InvoiceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Invoice([
            'sn'                  => $row[0], 
            'invoice_type'        => $row[1],
            'company_id'          => $row[2],
            'company_ibs_id'      => $row[3],
            'tax_id'              => $row[4],
            'invoice_date'        => $row[5],
            'invoice_number'      => $row[6], 
            'order_date'          => $row[7],
            'memo_number'         => $row[8],
            'heading'             => $row[9], 
            'position'            => $row[10],
            'published_date'      => $row[11],
            'inch'                => $row[12],
            'rate'                => $row[13], 
            'customer_id'         => $row[14], 
            'customer_name'       => $row[15], 
            'customer_email'      => $row[16], 
            'customer_tax_number' => $row[17], 
            'customer_phone'      => $row[18], 
            'customer_address'    => $row[19], 
            'color_charge'        => $row[20], 
            'first_page_charge'   => $row[21], 
            'back_page_charge'    => $row[22],
            'commercial_charge'   => $row[23],  
            'commision'           => $row[24], 
            'vat'                 => $row[25], 
            'total'               => $row[26], 
            'sender_email'        => $row[27], 
            
        ]);
    }
}
