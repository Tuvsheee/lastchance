<?php
use App\Http\Controllers\Medee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\Reservation;
use App\Http\Controllers\Searchs;
use App\Http\Controllers\AuthController;
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


Route::get('/admin/payments', [Reservation::class, 'payon'])->name('pay_on');
Route::post('/reservation', [Reservation::class, 'store'])->name('res_pay');

Route::get('/admin/login', [AuthController::class, 'index'])->name('news');

Route::post('/mroom', [Searchs::class, 'search'])->name('m_search');
Route::post('/home', [AuthController::class, 'loginAction'])->name('uhome');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::delete('destroy/{id}',[AuthController::class, 'destroy'])->name('user.destroy');
 






