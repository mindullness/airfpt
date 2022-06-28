<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\UserHomepageController;
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

Route::group(['prefix'=>'airfpt'], function(){

    Route::get('/', [UserHomepageController::class, 'index'])->name('airfpt.index');

    Route::get('/faqs', [UserHomepageController::class, 'faqs'])->name('airfpt.faqs');

    Route::any('/booking/searchFlight', [UserHomepageController::class, 'searchFlight'])->name('airfpt.booking.searchFlight');
    Route::any('/booking/flightList', [UserHomepageController::class, 'flightList'])->name('airfpt.booking.flightList');

});
// End of group airfpt

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');


    Route::get('/airports', [AirportController::class, 'index'])->name('admin.airports.index');
    Route::get('/airports/create', [AirportController::class, 'create'])->name('admin.airports.create');
    Route::post('/airports/postCreate', [AirportController::class, 'postCreate'])->name('admin.airports.postCreate');
    Route::any('{iata_code}/update', [AirportController::class, 'update'])->name('admin.airports.update');
    Route::post('{iata_code}/postUpdate', [AirportController::class, 'postUpdate'])->name('admin.airports.postUpdate');
    Route::get('{iata_code}/delete', [AirportController::class, 'delete'])->name('admin.airports.delete');
});
// End of group admin









// Route::group(['prefix'=>'phucduy'], function(){
//     Route::get('/', [PhucDuyController::class, 'index'])->name('phucduy.index');

//     Route::get('/create', [ProductController::class, 'create'])->name('product.create');
//     Route::post('/postCreate', [ProductController::class, 'postCreate'])->name('product.postCreate');
//     Route::any('{id}/update', [ProductController::class, 'update'])->name('product.update');
//     Route::post('{id}/postUpdate', [ProductController::class, 'postUpdate'])->name('product.postUpdate');
//     Route::get('{id}/delete', [ProductController::class, 'delete'])->name('product.delete');
//     Route::post('/search',[ProductController::class, 'search'])->name('product.search');
//     Route::get('{id}/details', [ProductController::class, 'details'])->name('product.details');
// });

