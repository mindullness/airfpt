<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhucDuyController;
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

Route::get('airfpt/', [HomeController::class, 'index'])->name('airfpt.index');


Route::group(['prefix'=>'phucduy'], function(){
    Route::get('/', [PhucDuyController::class, 'index'])->name('phucduy.index');

    // Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    // Route::post('/postCreate', [ProductController::class, 'postCreate'])->name('product.postCreate');
    // Route::any('{id}/update', [ProductController::class, 'update'])->name('product.update');
    // Route::post('{id}/postUpdate', [ProductController::class, 'postUpdate'])->name('product.postUpdate');
    // Route::get('{id}/delete', [ProductController::class, 'delete'])->name('product.delete');
    // Route::post('/search',[ProductController::class, 'search'])->name('product.search');
    // Route::get('{id}/details', [ProductController::class, 'details'])->name('product.details');
});