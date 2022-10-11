<?php

namespace App\Exports;

use App\Models\Expense;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExpenseExport implements FromView
{
    public function view(): View
    {
        return view('backend.expense.export', [
            'expenses' => Expense::all()
        ]);
    }
}
