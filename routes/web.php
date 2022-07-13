<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\AirportsController;
use App\Http\Controllers\AircraftsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoutesController;
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

Route::group(['prefix' => 'airfpt'], function () {

    Route::get('/', [UserHomepageController::class, 'index'])->name('airfpt.index');

    Route::get('/faqs', [UserHomepageController::class, 'faqs'])->name('airfpt.faqs');
    Route::get('/booking/booking', [BookingController::class, 'book'])->name('airfpt.booking.booking');
    Route::post('/booking/postBooking', [BookingController::class, 'postBooking'])->name('airfpt.booking.postBooking');
});
// End of group airfpt

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    // Flight Controller
    Route::get('/flights', [FlightsController::class, 'index'])->name('admin.flights.index');
    Route::get('/flights/create', [FlightsController::class, 'create'])->name('admin.flights.create');
    Route::post('/flights/postCreate', [FlightsController::class, 'postCreate'])->name('admin.flights.postCreate');
    Route::get('/flights/{id}/update', [FlightsController::class, 'update'])->name('admin.flights.update');
    Route::post('/flights/{id}/postUpdate', [FlightsController::class, 'postUpdate'])->name('admin.flights.postUpdate');
    Route::get('/flights/{id}/delete', [FlightsController::class, 'delete'])->name('admin.flights.delete');
    Route::get('/flights/{id}/details', [FlightsController::class, 'details'])->name('admin.flights.details');

    // Route Controller
    Route::get('/routes', [RoutesController::class, 'index'])->name('admin.routes.index');
    Route::get('/routes/create', [RoutesController::class, 'create'])->name('admin.routes.create');
    Route::post('/routes/postCreate', [RoutesController::class, 'postCreate'])->name('admin.routes.postCreate');
    Route::any('/routes/{id}update', [RoutesController::class, 'update'])->name('admin.routes.update');
    Route::post('{id}/routes/postUpdate', [RoutesController::class, 'postUpdate'])->name('admin.routes.postUpdate');
    Route::get('{id}/routes/delete', [RoutesController::class, 'delete'])->name('admin.routes.delete');

    // Airport Controller
    Route::get('/airports', [AirportsController::class, 'index'])->name('admin.airports.index');
    Route::get('/airports/create', [AirportsController::class, 'create'])->name('admin.airports.create');
    Route::post('/airports/postCreate', [AirportsController::class, 'postCreate'])->name('admin.airports.postCreate');
    Route::any('/airports/{iata_code}update', [AirportsController::class, 'update'])->name('admin.airports.update');
    Route::post('{iata_code}/airports/postUpdate', [AirportsController::class, 'postUpdate'])->name('admin.airports.postUpdate');
    Route::get('{iata_code}/airports/delete', [AirportsController::class, 'delete'])->name('admin.airports.delete');

    // Aircraft Controller
    Route::get('/aircrafts', [AircraftsController::class, 'index'])->name('admin.aircrafts.index');
    Route::get('/aircrafts/create', [AircraftsController::class, 'create'])->name('admin.aircrafts.create');
    Route::post('/aircrafts/postCreate', [AircraftsController::class, 'postCreate'])->name('admin.aircrafts.postCreate');
    Route::any('/aircrafts/{iata_code}update', [AircraftsController::class, 'update'])->name('admin.aircrafts.update');
    Route::post('{iata_code}/aircrafts/postUpdate', [AircraftsController::class, 'postUpdate'])->name('admin.aircrafts.postUpdate');
    Route::get('{iata_code}/aircrafts/delete', [AircraftsController::class, 'delete'])->name('admin.aircrafts.delete');
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
