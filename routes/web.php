<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;
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
    return view('welcome');
});

Auth::routes(['register' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin(Backend)
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('home');
    });
    // Untuk Route Backend Lainnya
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('berita', App\Http\Controllers\BeritaController::class);
    Route::resource('gallery', App\Http\Controllers\GalleryController::class);
    Route::resource('kontak', App\Http\Controllers\KontakController::class);
    Route::resource('tentang', App\Http\Controllers\TentangController::class);
    Route::resource('message', App\Http\Controllers\MessagesController::class);

});
Route::get('/', [FrontController::class, 'home']);

Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('news', [FrontController::class, 'news'])->name('news');
Route::get('news/load-more', [FrontController::class, 'loadMore'])->name('newsLoad');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::post('contact', [FrontController::class, 'store'])->name('front.message.store');
Route::get('more',[FrontController::class, 'more']);
Route::get('/news/{id}', [BeritaController::class, 'show'])->name('news.show');






