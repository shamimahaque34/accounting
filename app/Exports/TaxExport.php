<?php

namespace App\Exports;

use App\Models\Tax;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TaxExport implements FromView
{
    public function view(): View
    {
        return view('backend.tax.export', [
            'taxes' => Tax::all()
        ]);
    }
}
