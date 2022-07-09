<?php

use Illuminate\Support\Facades\Route;

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
    return view('user.home');
});

Route::group(['prefix' => '/user'], function () {
    Route::get('/register', [\App\Http\Controllers\ClientController::class, 'register']);
    Route::post('/register', [\App\Http\Controllers\ClientController::class, 'registerAction']);

    Route::get('/login', [\App\Http\Controllers\ClientController::class, 'login']);
    Route::post('/login', [\App\Http\Controllers\ClientController::class, 'loginAction']);
    Route::get('/logout', [\App\Http\Controllers\ClientController::class, 'logout']);

    Route::get('/login/google', [\App\Http\Controllers\GoogleController::class, 'loginWithGoogle']);
    Route::get('/login/callback', [\App\Http\Controllers\GoogleController::class, 'callBackFromGoogle']);

    Route::get('/login/facebook', [\App\Http\Controllers\FaceBookController::class, 'loginWithFacebook']);
    Route::get('/login/callback-facebook', [\App\Http\Controllers\FaceBookController::class, 'callBackFromFacebook']);

    Route::get('/active/{hash}', [\App\Http\Controllers\ClientController::class, 'active']);
});

Route::get('/admin/user/getdata', [\App\Http\Controllers\ClientController::class, 'viewUser']);
Route::get('/admin/user/delete/{id}', [\App\Http\Controllers\ClientController::class, 'destroy']);

Route::get('/admin/user/index', function () {
    return view('admin.clients.index');
});


Route::get('/popular-place', function () {
    return view('popular.index');
});
Route::get('/danang', function () {
    return view('popular.danang');
});
Route::get('/hoian', function () {
    return view('popular.hoian');
});
Route::get('/phuquoc', function () {
    return view('popular.phuquoc');
});
Route::get('/contact', function () {
    return view('contact.index');
});
Route::get('/handbook', function () {
    return view('hand_book.index');
});
Route::get('/service', function () {
    return view('service.index');
});
Route::get('/handbook', function () {
    return view('hand_book.index');
});
Route::get('/handbook/du-lich-da-nang', function () {
    return view('hand_book.du_lich_da_nang');
});
Route::get('/food', function () {
    return view('service.food.index');
});
Route::get('/danangfood', function () {
    return view('service.food.danangfood');
});
Route::get('/hanoifood', function () {
    return view('service.food.hanoifood');
});
Route::get('/pho', function () {
    return view('service.food.pho');
});

Route::get('/booking', function () {
    return view('booking.index');
});
Route::get('/booking/flight-booking', function () {
    return view('booking.flight_booking');
});
Route::get('/booking/hotel-ha-noi', function () {
    return view('booking.hotel.search_hanoi');
});
Route::get('/booking/hotel-ha-noi/detail', function () {
    return view('booking.hotel.hotel_detail');
});
Route::get('/booking/hotel-ha-noi/detail/view-booking', [\App\Http\Controllers\ClientController::class, 'viewBooking']);
Route::post('/booking/detail', [\App\Http\Controllers\HoaDonController::class, 'createHoaDon']);
Route::get('/booking/hotel-ha-noi/detail/view-booking/confirm', function () {
    return view('booking.hotel.confirm_booking');
});
Route::get('/beach', function () {
    return view('service.beach.index');
});
Route::get('/nhatrang', function () {
    return view('service.beach.nhatrang');
});
Route::get('/beaches', function () {
    return view('service.beach.9beaches');
});
Route::get('/sunset', function () {
    return view('service.beach.sunset');
});

Route::post('/vnpay_payment', [\App\Http\Controllers\CheckoutController::class, 'vnpay_payment']);
Route::get('/detail', [\App\Http\Controllers\HoaDonController::class, 'getData']);
/////abcxsadad
Route::get('/confirm', [\App\Http\Controllers\CheckoutController::class, 'confirm']);
