<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomBillController;
use App\Http\Controllers\RoomCategoriesController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomStatusController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return redirect(route('home'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/denies', [App\Http\Controllers\HomeController::class, 'denies'])->name('denies');

/*------ Client ------*/
Route::prefix('client')->name('client.')->group(function () {

    $class = ClientController::class;
    Route::get('/', [$class, 'index'])->name('index');
    Route::get('/about-us', [$class, 'aboutUs'])->name('about-us');
    Route::get('/contacts', [$class, 'contacts'])->name('contacts');
    Route::get('/typography', [$class, 'typography'])->name('typography');
    Route::get('/reservation', [$class, 'reservation'])->name('reservation');
    Route::get('/rooms', [$class, 'rooms'])->name('rooms');
    Route::get('/selectRoom', [$class, 'selectRoom'])->name('selectRoom');
    Route::post('/', [RoomBillController::class, 'book'])->name('book');
});

Route::get('/index', [StatusController::class, 'index'])->name('listStatus');
Route::get('/search', [StatusController::class, 'search'])->name('search');
// Route::get('/searchStatus/{array}', [StatusController::class, 'show'])->name('showDetail');
Route::get('/showDetail/{category_name}/{room_name}/{double_bed}/{single_bed}/{price}/{description}/{number_of_adults}/{number_of_children}/{checkin}/{checkout}', [StatusController::class, 'show'])->name('showDetail');
Route::get('/order/{category_name}/{room_name}/{price}/{number_of_adults}/{number_of_children}/{checkin}/{checkout}', [StatusController::class, 'order'])->name('order');
// Route::post('/reservation/{client_name}/{phone}/{email}/{ID_Card}/{category_name}/{room_name}/{number_of_adults}/{number_of_children}/{checkin}/{checkout}/{price}/{payment}', [StatusController::class, 'reservation'])->name('reservation');
Route::post('/reservation', [StatusController::class, 'reservation'])->name('reservation');
Route::get('/{reservation}/editReservation', [ReservationController::class, 'edit'])->name('editReservation');
Route::put('/{reservation}/updateReservation', [ReservationController::class, 'update'])->name('updateReservation');
Route::get('/chart/{room_name}', [StatusController::class, 'chart'])->name('chart');
Route::get('/searchReservation', [ReservationController::class, 'searchReservation'])->name('searchReservation');
Route::get('/viewDetailReservation/{id}', [ReservationController::class, 'viewDetail'])->name('viewDetail');
Route::get('/showReservation/{reservation}', [ReservationController::class, 'show'])->name('showReservation');
Route::get('/listAllReservation', [ReservationController::class, 'index'])->name('listAllReservation');
Route::get('/searchReservationByCode', [ReservationController::class, 'searchReservationByCode'])->name('searchReservationByCode');
Route::get('/createReservation', [ReservationController::class, 'create'])->name('createReservation');

Route::get('/s', [StatusController::class, 'listCategories'])->name('listCategories');

//new UI
Route::get('/listReservation', [ReservationController::class, 'index'])->name('listAllReservation');

//email
Route::get('/send_email', [MailController::class, 'sendEmail'])->name('sendEmail');

//sms
Route::get('/send_sms', [NotificationController::class, 'sendSms'])->name('sendSms');

//SMS twilio
Route::get('/sms', [NotificationController::class, 'sms'])->name('sms');

//test random
Route::get('/random', [NotificationController::class, 'randomCode'])->name('randomCode');

/*------ Admin ------*/
Route::prefix('admin')->middleware('auth')->group(function () {

    /*------ Route Users ------*/
    Route::prefix('users')->name('users.')->group(function () {
        $class = UserController::class;
        Route::get('/', [$class, 'index'])->name('index');
        Route::get('/create', [$class, 'create'])->name('create');
        Route::post('/', [$class, 'store'])->name('store');
        Route::get('/{user}', [$class, 'show'])->name('show');
        Route::put('/{user}', [$class, 'update'])->name('update');
        Route::delete('/{user}', [$class, 'destroy'])->name('destroy');
        Route::get('/{user}/edit', [$class, 'edit'])->name('edit');
    });

    /*------ Route RoomCategory ------*/
    Route::prefix('categories')->name('categories.')->group(function () {
        $class = RoomCategoriesController::class;
        Route::get('/', [$class, 'index'])->name('index');
        Route::get('/create', [$class, 'create'])->name('create');
        Route::post('/', [$class, 'store'])->name('store');
        Route::get('/{roomCategories}', [$class, 'show'])->name('show');
        Route::put('/{roomCategories}', [$class, 'update'])->name('update');
        Route::delete('/{roomCategories}', [$class, 'destroy'])->name('destroy');
        Route::get('/{roomCategories}/edit', [$class, 'edit'])->name('edit');
        Route::get('/{roomCategories}/select', [$class, 'SelectCategoryOrder'])->name('select');
    });

    /*------ Route Room ------*/
    Route::prefix('rooms')->name('rooms.')->group(function () {
        $class = RoomController::class;
        Route::get('/', [$class, 'index'])->name('index');
        Route::get('/create', [$class, 'create'])->name('create');
        Route::post('/', [$class, 'store'])->name('store');
        Route::get('/{room}', [$class, 'show'])->name('show');
        Route::put('/{room}', [$class, 'update'])->name('update');
        Route::delete('/{room}', [$class, 'destroy'])->name('destroy');
        Route::get('/{room}/edit', [$class, 'edit'])->name('edit');
    });

    /*------ Route Room's status ------*/
    Route::prefix('status')->name('status.')->group(function () {
        $class = RoomStatusController::class;
        Route::get('/', [$class, 'index'])->name('index');
        Route::get('/create', [$class, 'create'])->name('create');
        Route::post('/', [$class, 'store'])->name('store');
        Route::get('/{roomStatus}', [$class, 'show'])->name('show');
        Route::put('/{roomStatus}', [$class, 'update'])->name('update');
        Route::delete('/{roomStatus}', [$class, 'destroy'])->name('destroy');
        Route::get('/{roomStatus}/edit', [$class, 'edit'])->name('edit');
    });

    /*------ Route Room's order ------*/
    Route::prefix('bills')->name('bills.')->group(function () {
        $class = RoomBillController::class;
        Route::get('/', [$class, 'index'])->name('index');
        Route::get('/create', [$class, 'create'])->name('create');
        Route::post('/', [$class, 'store'])->name('store');
        Route::get('/{roomBill}', [$class, 'show'])->name('show');
        Route::put('/{roomBill}', [$class, 'update'])->name('update');
        Route::delete('/{roomBill}', [$class, 'destroy'])->name('destroy');
        Route::get('/{roomBill}/edit', [$class, 'edit'])->name('edit');
    });
});
