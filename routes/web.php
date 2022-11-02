<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\ContractController;
use \App\Http\Controllers\InvoiceController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CompanyController;
use \App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\OfferController;
use App\Http\Controllers\RoleController;
use App\Models\Product;

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

Route::get('/guest/products', function(){
    $products = Product::all();
        return view('pages/guest/products/index' ,[
            'products' => $products
        ]);
});

Route::get('/guest/products/{id}', function($id){
    $product = Product::findOrFail($id);
        return view('pages/guest/products/show',[
            'product' => $product
        ]);
})->name('product');

Route::get('/pages/guest/contact', function () {
    return view('pages/guest/contact');
})->name('contact');

Route::get('/maintenance/create', [MaintenanceController::class, 'create']);

Route::get('/dashboard', function () {
    return view('pages/admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('contacts', ContactController::class);
    Route::resource('contracts', ContractController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::resource('products', ProductController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('maintenance', MaintenanceController::class);
    Route::resource('users', UserController::class);
    Route::resource('offers', OfferController::class);
});


require __DIR__ . '/auth.php';
