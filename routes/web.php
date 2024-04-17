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
    return view('admin-ui/login/adminlogin'); 
});



Route::get('/admin/payments', [Reservation::class, 'payon'])->name('pay_on');
Route::post('/reservation', [Reservation::class, 'store'])->name('res_pay');

Route::get('/admin/login', [AuthController::class, 'index'])->name('news');
Route::get('/admin/layout/adminhome', [AuthController::class, 'adminhome'])->name('dash');

Route::get('/mroom', [Searchs::class, 'gsearch'])->name('gsearch');
Route::get('/mroom', [Searchs::class, 'filter'])->name('rooms.filter');
Route::post('/mroom', [Searchs::class, 'psearch'])->name('psearch');

Route::get('/admin/rooms', [Searchs::class, 'index'])->name('room');
Route::get('/admin/rooms/create', [Searchs::class, 'create'])->name('room_create');
Route::post('/admin/rooms/create', [Searchs::class, 'addroom'])->name('room_add');

Route::post('/home', [AuthController::class, 'loginAction'])->name('uhome');
Route::get('admin/register', [AuthController::class, 'aregister'])->name('aregister');
Route::get('admin/login/adminlogin', [AuthController::class, 'alogin'])->name('alogin');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::post('admin/register', 'adminRegister')->name('adminregister');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::post('admin/login', 'adminLogin')->name('adminlogin');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::delete('destroy/{id}',[AuthController::class, 'destroy'])->name('user.destroy');
 







