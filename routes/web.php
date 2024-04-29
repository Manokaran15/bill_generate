<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseDetailController;
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
    return view('master');
});

Route::view('/','master');

Route::view('/add-product','product/product_add');

Route::view('/','product/product_list');

Route::view('/edit-product/{id}','product/product_edit');

Route::post('/add-product', [ProductController::class, 'store']);

Route::get('/', [ProductController::class, 'index']);

Route::get('/edit-product/{id}', [ProductController::class, 'edit']);

Route::post('/update-product/{id}', [ProductController::class, 'update']);

Route::get('/delete-product/{id}', [ProductController::class, 'destroy']);

Route::view('/purchase-product','purchase/purchase_product');

Route::get('/purchase-product', [ProductController::class, 'denominations']);

Route::post('/purchase', [PurchaseDetailController::class, 'store']);

Route::view('/purchase-bill','purchase/purchase_bill');

Route::get('/purchase-bill', [PurchaseDetailController::class, 'index']);

Route::view('/purchase-list','purchase/purchase_list');

Route::get('/purchase-list', [PurchaseDetailController::class, 'show']);

Route::view('/view-purchase/{id}','purchase/purchase_view');

Route::get('/view-purchase/{id}', [PurchaseDetailController::class, 'view']);

