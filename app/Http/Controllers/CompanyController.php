<?php

namespace App\Http\Controllers;

use App\Exports\CompanyExport;
use App\Imports\CompanyImport;
use Illuminate\Http\Request;
use App\Models\Company;
use Maatwebsite\Excel\Excel;

class CompanyController extends Controller
{
    //listado de empresas
    public function index(){
        //select * from companies
        $companies = Company::paginate(5);
        //envia vista index con listado de empresas
        return view('companies.index', compact('companies'));
    }

    //muestra el detalle de una empresa por el id
    public function show($id){
        //select * from companies where id
        $company = Company::find($id);
        //regresa la vista de los detalles con los datos de la empresa
        return view('companies.show', compact('company'));
    }

    //crear una nueva empresa
    public function create(Request $request){
        //envia la vista del formulario de creación
        return view('companies.create');
    }

    //formulario de edicion de empresa
    public function edit($id){
        //buscamos la empresa por id
        $company = Company::find($id);
        //select * from companies where id
        //envia la vista de el formulario de edicion con la empresa que se va a editar
        return view('companies.edit', compact('company'));
    }

    //guardado de cambios
    public function update($id, Request $request){
        $company = Company::find($id)->update([
            //asignamos el valor de los inputs a la empresa
            'name' => $request->input('name'),
            'nit' => $request->input('nit')
        ]);
        //volvemos a la vista del listado de index de cmpanies
        return redirect('companies');
    }

    //guardado de nuevas empresas
    public function store(Request $request){
        $company = Company::create([
            //asignamos los valores de los input a la empresa
            'name' => $request->input('name'),
            'nit' => $request->input('nit')
        ]);
        //regresamos al listado del index
        return redirect('companies');
    }

    //eliminar una empresa
    public function destroy($id){
        //buscamos el producto por id
        $company = Company::find($id)->delete();
        //regresamos al index de companies
        return redirect('companies');
    }

    public function export(){
        return (new CompanyExport)->download('companies.xlsx');
    }

    public function import(Request $request){
        $file = $request->file('importFile');
        Excel::import(new CompanyImport, $file);
        //regresamos al listado de companies
        return redirect('companies');
    }
}
