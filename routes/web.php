<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IsAdmin;
use App\Http\Controllers\IsCustomer;
use App\Http\Controllers\Customers;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\ContactController;


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
});

Route::Group(['middleware' => ['ChkAdmin']], function () {
    Route::resource('/customers', Customers::class);
    Route::resource('contact', ContactController::class);
    Route::resource('/expense', ExpenseController::class);
    Route::get('/customer', [IsAdmin::class, 'customer'])->name('customer');
    Route::get('/', [IsAdmin::class, 'index'])->name('dashboard');
});
Route::Group(['middleware' => ['ChkCustomer']], function () {
    Route::get('/customer_panel', [IsCustomer::class, 'index'])->name('customer_panel');

 
});
  


Auth::routes(['register' => false]);

