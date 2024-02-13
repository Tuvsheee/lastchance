<?php
use App\Http\Controllers\Medee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\News;
use App\Http\Controllers\Payments;
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

Route::delete('/admin/category/delete/{category}', [Category::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/news', [News::class, 'index'])->name('news');
Route::get('/admin/payment', [Payments::class, 'index'])->name('pay_store');
Route::get('/admin/news/create', [News::class, 'create'])->name('news_create');
Route::get('/admin/news/create', [News::class, 'create'])->name('news_create');
Route::post('/admin/news/create', [News::class, 'store'])->name('news_store');
Route::delete('/admin/category/delete{category}', [Category::class, 'destroy'])->name('cat_delete');




