<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyController;
use App\Exports\CompanyExport;
use App\Exports\ProductExport;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//listado de productos
Route::get('products', [ProductController::class, 'index'])->name('products.index');
//formulario nuevo producto
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
//detalles producto id
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
//formulario edición producto
Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
//guardado nuevo producto
Route::post('products', [ProductController::class, 'store'])->name('products.store');
//actualizacion producto id
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
//eliminar producto id
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

//creacion de todas las rutas necesarias para Company

//listado de productos
Route::get('companies', [CompanyController::class, 'index'])->name('companies.index');
//formulario nuevo producto
Route::get('companies/create', [CompanyController::class, 'create'])->name('companies.create');
//detalles producto id
Route::get('companies/{id}', [CompanyController::class, 'show'])->name('companies.show');
//formulario edición producto
Route::get('companies/edit/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
//guardado nuevo producto
Route::post('companies', [CompanyController::class, 'store'])->name('companies.store');
//actualizacion producto id
Route::put('companies/{id}', [CompanyController::class, 'update'])->name('companies.update');
//eliminar producto id
Route::delete('companies/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');

//rutas para exportar e importar productos
Route::get('export/excel/products', function (){
    return Excel::download(new ProductExport(), 'list-products.xlsx');
})->name('products.export');


//rutas para exportar e importar compañias
Route::get('export/excel/companies', function (){
    return Excel::download(new CompanyExport(), 'list-companies.xlsx');
});
