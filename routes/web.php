<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AircraftsController;
use App\Http\Controllers\AirportsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FaqsTermController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ManageMyBookingController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberListController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\UserHomepageController;


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

    // ------------------------------ //
    // ***       NGUYEN TOAN      *** //
    // ------------------------------ //

    // index page
    Route::get('/', [UserHomepageController::class, 'index'])->name('airfpt.index');

    // Booking
    Route::get('/booking/booking', [BookingController::class, 'book'])->name('airfpt.booking.booking');
    Route::post('/booking/postBooking', [BookingController::class, 'postBooking'])->name('airfpt.booking.postBooking');
    Route::get('/booking/{pnr}travelItinerary', [BookingController::class, 'travelItinerary'])->name('airfpt.booking.travelItinerary');

    // ------------------------------ //
    // *** TRUONG DUONG TRUC DUY  *** //
    // ------------------------------ //

    //faqs, term, customer service
    Route::get('/faqs', [FaqsTermController::class, 'faqs'])->name('airfpt.faqs');
    Route::get('/term_con', [FaqsTermController::class, 'term_con'])->name('airfpt.term_con');
    Route::get('/condition_of_carriage', [FaqsTermController::class, 'condition_of_carriage'])->name('airfpt.condition_of_carriage');
    Route::get('/contact', [FaqsTermController::class, 'contact'])->name('airfpt.contact');
    Route::get('/customer_service', [FaqsTermController::class, 'customer_service'])->name('airfpt.customer_service');

    //news
    Route::get('/user/homeNews', [NewsController::class, 'homeNews'])->name('airfpt.user.homeNews');
    Route::get('/user/{id}/details', [NewsController::class, 'details'])->name('airfpt.user.details');

    //feedback
    Route::get('/user/create_comment', [CommentController::class, 'create_comment'])->name('airfpt.user.create_comment');
    Route::post('/user/postCreate_comment', [CommentController::class, 'postCreate_comment'])->name('airfpt.user.postCreate_comment');
    Route::get('/comment', [CommentController::class, 'comment'])->name('airfpt.comment');
    Route::get('/user/{id}/show_comment', [CommentController::class, 'show_comment'])->name('airfpt.user.show_comment');

    //passenger infomation
    Route::get('/user/pass_info', [NewsController::class, 'pass_info'])->name('airfpt.user.pass_info');
    Route::get('/user/pass_info_carry', [NewsController::class, 'pass_info_carry'])->name('airfpt.user.pass_info_carry');
    Route::get('/user/pass_info_checked', [NewsController::class, 'pass_info_checked'])->name('airfpt.user.pass_info_checked');
    Route::get('/user/pass_info_cus', [NewsController::class, 'pass_info_cus'])->name('airfpt.user.pass_info_cus');
    Route::get('/user/pass_info_travel', [NewsController::class, 'pass_info_travel'])->name('airfpt.user.pass_info_travel');

    // ------------------------------ //
    // ***     NGUYEN PHUC DUY    *** //
    // ------------------------------ //

    //Member
    Route::get('/mem_register', [MemberController::class, 'mem_register'])->name('airfpt.mem_register');
    Route::post('/mem_postRegister', [MemberController::class, 'mem_postRegister'])->name('airfpt.mem_postRegister');
    Route::get('/member/mem_login', [MemberController::class, 'mem_login'])->name('airfpt.mem_login');
    Route::post('/mem_postLogin', [MemberController::class, 'mem_postLogin'])->name('airfpt.mem_postLogin');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/mem_pass', [MemberController::class, 'mem_pass'])->name('airfpt.mem_pass');
    Route::get('/mem_detail', [MemberController::class, 'mem_detail'])->name('airfpt.mem_detail');
    Route::get('/mem_update', [MemberController::class, 'mem_update'])->name('airfpt.mem_update');
    Route::post('/mem_postUpdate', [MemberController::class, 'mem_postUpdate'])->name('airfpt.mem_postUpdate');

    //admin login
    Route::get('/admin_login', [AdminLoginController::class, 'admin_login'])->name('airfpt.admin_login');
    Route::post('/admin_postLogin', [AdminLoginController::class, 'admin_postLogin'])->name('airfpt.admin_postLogin');

    // ------------------------------ //
    // ***      LE QUOC TRUNG     *** //
    // ------------------------------ //

    Route::get('manageBooking/index', [ManageMyBookingController::class, 'index'])->name('manageBooking.index');
    Route::post('manageBooking/show', [ManageMyBookingController::class, 'show'])->name('manageBooking.show');
    Route::get('manageBooking/flightStatus', [ManageMyBookingController::class, 'flightStatus'])->name('manageBooking.flightStatus');
    Route::get('manageBooking/flightStatusShow', [ManageMyBookingController::class, 'flightStatusShow'])->name('manageBooking.flightStatusShow');
    Route::get('manageBooking/seat', [ManageMyBookingController::class, 'seat'])->name('manageBooking.seat');
    Route::get('manageBooking/showseat', [ManageMyBookingController::class, 'showseat'])->name('manageBooking.showseat');
    Route::get('manageBooking/boardingpass', [ManageMyBookingController::class, 'boardingpass'])->name('manageBooking.boardingpass');
});
// End of group airfpt - userpage


// ADMIN PAGE

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {

    // ------------------------------ //
    // ***       NGUYEN TOAN      *** //
    // ------------------------------ //

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    // Passenger Bookings
    Route::get('/passenger/index', [AdminController::class, 'display_pax_booking'])->name('admin.passenger.index');

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

    // ------------------------------ //
    // ***     NGUYEN PHUC DUY    *** //
    // ------------------------------ //
    // Member list controller
    Route::get('/member', [MemberListController::class, 'index'])->name('admin.member.index');
    Route::get('/member/create', [MemberListController::class, 'create'])->name('admin.member.create');
    Route::post('/member/postCreate', [MemberListController::class, 'postCreate'])->name('admin.member.postCreate');
    Route::any('/member/{id}update', [MemberListController::class, 'update'])->name('admin.member.update');
    Route::post('{id}/member/postUpdate', [MemberListController::class, 'postUpdate'])->name('admin.member.postUpdate');
    Route::get('{id}/member/delete', [MemberListController::class, 'delete'])->name('admin.member.delete');

    // admin list controller
    Route::get('/admin', [AdminListController::class, 'index'])->name('admin.admin.index');
    Route::get('/admin/create', [AdminListController::class, 'create'])->name('admin.admin.create');
    Route::post('/admin/postCreate', [AdminListController::class, 'postCreate'])->name('admin.admin.postCreate');
    Route::any('/admin/{id}update', [AdminListController::class, 'update'])->name('admin.admin.update');
    Route::post('{id}/admin/postUpdate', [AdminListController::class, 'postUpdate'])->name('admin.admin.postUpdate');
    Route::get('{id}/admin/delete', [AdminListController::class, 'delete'])->name('admin.admin.delete');

    // ------------------------------ //
    // *** TRUONG DUONG TRUC DUY  *** //
    // ------------------------------ //

    // News
    Route::get('/news/index', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news/postCreate', [NewsController::class, 'postCreate'])->name('admin.news.postCreate');

    Route::get('/news/{id}/update', [NewsController::class, 'update'])->name('admin.news.update');
    Route::post('/news/{id}/postUpdate', [NewsController::class, 'postUpdate'])->name('admin.news.postUpdate');
    Route::get('/news/{id}/delete', [NewsController::class, 'delete'])->name('admin.news.delete');

    //feedback
    Route::get('/comment/index', [CommentController::class, 'index'])->name('admin.comment.index');
    Route::get('/comment/{id}/delete_cmt', [CommentController::class, 'delete_cmt'])->name('admin.comment.delete_cmt');
    Route::post('/comment/{id}/addReply', [CommentController::class, 'addReply'])->name('admin.comment.addReply');
    Route::get('/comment/{id}/reply', [CommentController::class, 'reply'])->name('admin.comment.reply');
    // ------------------------------ //
    // ***      LE QUOC TRUNG     *** //
    // ------------------------------ //



});
// End of group admin
