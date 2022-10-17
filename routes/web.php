<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CompanyController;
use \App\Http\Controllers\MaintenanceController;

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

Route::get('/', function () {
    return view('pages/welcome');
});

Route::get('/pages/guest/contact', function () {
    return view('pages/guest/contact');
});

Route::get('/maintenance/create', [MaintenanceController::class, 'create']);

Route::get('/dashboard', function () {
    return view('pages/admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('contacts', ContactController::class);
    Route::resource('products', ProductController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('maintenance', MaintenanceController::class);
});

require __DIR__ . '/auth.php';
