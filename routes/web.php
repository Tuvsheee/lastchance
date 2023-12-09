<?php

use App\Http\Controllers\Medee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\News;
use App\Http\Controllers\Payments;
use App\Http\Controllers\AdminController;
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
Route::get('/show-modal', [ModalController::class, 'showModal'])->name('showModal');
Route::post('/submit-form', [ModalController::class, 'submitForm'])->name('submitForm');

Route::get('/home', function () {
    return view('home'); 
});
Route::get('/modal', function () {
    return view('modal'); 
});

Route::get('/page2', function () {
    return view('page2'); 
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

Route::delete('/admin/category/delete/{category}', [Category::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/news', [News::class, 'index'])->name('news');
Route::get('/admin/news/create', [News::class, 'create'])->name('news_create');
Route::post('/admin/news/create', [News::class, 'store'])->name('news_store');

use App\Http\Controllers\ReservationController;

Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');

