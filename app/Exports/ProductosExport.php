<?php

namespace App\Exports;

use App\Producto;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductosExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('productos.productosexport', [
            'productos' => Producto::all()
        ]);
    }
}
