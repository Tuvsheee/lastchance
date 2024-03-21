<?php
use App\Http\Controllers\Medee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\Login;
use App\Http\Controllers\Reservation;
use App\Http\Controllers\HotelController;
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

Route::get('/home', function () {
    return view('home'); 
});
Route::get('/modal', function () {
    return view('modal'); 
});

Route::get('/reservation', function () {
    return view('reservation'); 
});
Route::get('/mroom', function () {
    return view('mroom'); 
});
Route::get('/login', function () {
    return view('login'); 
});
Route::get('/register', function () {
    return view('register'); 
});
Route::get('/', function () {
    return view('home'); 
});

Route::get('/admin/login', [Login::class, 'index'])->name('news');
Route::get('/admin/payments', [Reservation::class, 'payon'])->name('pay_on');
Route::get('/admin/login/create', [Login::class, 'create'])->name('news_create');
Route::get('/admin/login/create', [Login::class, 'create'])->name('news_create');
Route::post('/admin/login/create', [Login::class, 'store'])->name('news_store');
Route::post('/reservation', [Reservation::class, 'paystore'])->name('res_pay');
Route::post('/login', [Login::class, 'store'])->name('login');
Route::get('/mroom', [HotelController::class, 'search'])->name('m_search');









