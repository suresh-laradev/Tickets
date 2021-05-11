<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuppliersController;

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

Route::resource('dashboard', DashboardController::class);
Route::resource('tickets', TicketsController::class);
Route::resource('customers', CustomersController::class);
Route::resource('suppliers', SuppliersController::class);
Route::resource('users', UsersController::class);
// Transform to JSON
Route::get('/to-json', function () {
    return App\Models\Customer::paginate(2);
});