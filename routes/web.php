<?php

use App\Livewire\Customers;
use App\Livewire\ViewCustomer;
use App\Livewire\CreateCustomer;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

Route::get('/customers/create', CreateCustomer::class)->name('create');
Route::post('/customers/create', [CreateCustomer::class, 'store']);
Route::get('/customers', Customers::class);
Route::get('/customers/{customer}', ViewCustomer::class);
Route::delete('/customers/{id}', [Customers::class, 'eliminar'])->name('clientes.eliminar');
Route::get('/customers/{customer}/edit', [CustomersController::class, 'edit'])->name('customers.edit');


//Route::get('/agregar', [UsuarioController::class, 'create'])->name('create');
