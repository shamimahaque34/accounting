<?php

namespace App\Exports;

use App\Models\Item;
 
use Maatwebsite\Excel\Concerns\FromCollection;

class ItemExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Item::all();
    }
}

// use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromView;

// class ItemExport implements FromView
// {
//     public function view(): View
//     {
//         return view('backend.item.export', [
//             'items' => Item::all()
//         ]);
//     }
// }
