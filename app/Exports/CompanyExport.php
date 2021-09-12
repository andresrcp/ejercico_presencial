<?php

namespace App\Exports;

use App\Models\Company;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class CompanyExport implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Company::all();
    }

    public function view(): View
    {
        return view('companies.export',[
            'companies'=>Company::get()
        ]);
    }
}
