<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ProductExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
//    public function collection()
//    {
//        return Product::all();
//    }

    use Exportable;
    private $date;

    public function view(): View
    {
        // TODO: Implement view() method.
        return view('products.export',[
            'products' => Product::get()
        ]);
    }
}
