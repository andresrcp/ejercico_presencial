<?php

namespace App\Http\Controllers;

use App\Imports\ProductImport;
use App\Models\Product;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Excel;

class ProductController extends Controller
{
    //listar productos
    public function index(){
        //select * from products
        $products = Product::paginate(5);
        //envia la vista products.index
        return view('products.index', compact('products'));
    }

    //mustra en detalle un producto
    public function show($id){
        //select * from products where id
        $product = Product::find($id);
        //envia la vista de product.show
        return view('products.show', compact('product'));
    }

    //crear nuevo producto
    public function create(){
        //select * from companies
        $companies = Company::all();
        //envia al formulario de creacion
        return view('products.create', compact('companies'));
    }

    //formulario de edición de producto
    public function edit($id){
        //buscamos el producto por su id
        $product = Product::find($id);
        //select * from companies
        $companies = Company::all();
        //enviamos el formulario de edicion
        return view('products.edit', compact('product','companies'));
    }

    //actualizar un producto
    public function update($id, Request $request){
        $product = Product::find($id)->update([
            //asignamos el valor de los inputs a cada uno de los atributos del producto
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'companies_id' => $request->input('companies_id')
        ]);
        //regresamos al listado de productos
        return redirect('products');
    }

    //guadado de informacion
    public function store(Request $request){
        $product = Product::create([
            //asignamos el valor de los inputs a cada uno de los atributos del producto
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'companies_id' => $request->input('companies_id')
        ]);
        //regresamos al listado de productos
        return redirect('products');
    }

    //eliminar un producto
    public function destroy($id){
        //buscamos el producto por id
        //select * from products where id
        $product = Product::find($id)->delete();
        //regresamos al listado de productos
        return redirect('products');
    }

    //descarga de listado en archivo .xlsx
    public function export(){
        return (new ProductExport)->download('products.xlsx');
    }

    //cargar datos por medio de archivo .xlsx
    public function importExcel(Request $request){
        $file = $request->file('importFile');
        Excel::import(new ProductImport(), $file);
        //regresamos al listado de productos
        return redirect('products');
    }
}
