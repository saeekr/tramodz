<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\BookingController;
use App\Http\Middleware\IsAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', function () {
    return view('home');
});

Route::get('/home', [UserController::class, 'index'])->name('home');
Route::get('/gallery', [UserController::class, 'gallery'])->name('gallery');
// Login and register
Route::get('/login', [LoginController::class, 'index'])->name('login')
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::resource("/user", MemberController::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('/members', MemberController::class);
    Route::get('/member', [UserController::class, 'member'])->name('member');
    Route::get('/member', [MemberController::class, 'member'])->name('member');
    Route::post('/member', [MemberController::class, 'store2'])->name('members.store');
    Route::get('/join', [UserController::class, 'join'])->name('join');
    Route::get('/booking', [UserController::class, 'booking'])->name('booking');
    Route::get('/profil', [UserController::class, 'profil'])->name('profil');
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/payment',  [BookingController::class, 'payment']);
    Route::post('/update-status-payment', 'BookingController@updateStatusPayment')->name('updateStatusPayment');
    Route::get('/cashbook', function () {
        return view('cashbook');
    });
    Route::post('/midtrans-callback', [BookingController::class, 'callback']);
});

// Route::resource("/admin", MemberController::class);
Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/dashboard', [BookingController::class, 'index'])->name('dashboard');
    Route::patch('/dashboard/{id}/update-status', [BookingController::class, 'updateStatus'])->name('booking.updateStatus');
    Route::resource('/members', MemberController::class);
    Route::get('/income', [FinanceController::class, 'pemasukan'])->name('finance.pemasukan');
    Route::get('/spending', [FinanceController::class, 'pengeluaran'])->name('finance.pengeluaran');
    Route::post('/kas/store-pemasukan', [FinanceController::class, 'storePemasukan'])->name('finance.storePemasukan');
    Route::post('/kas/store-pengeluaran', [FinanceController::class, 'storePengeluaran'])->name('finance.storePengeluaran');
    Route::delete('/finance/pemasukan/{id}', [FinanceController::class, 'deletePemasukan'])->name('finance.destroyPemasukan');
    Route::delete('/finance/pengeluaran/{id}', [FinanceController::class, 'deletePengeluaran'])->name('finance.destroyPengeluaran');
});
