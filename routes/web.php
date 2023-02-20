<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

// Praktikum 1
// Route::get('/', function () {
//     return 'selamat datang';
// });

// Route::get('/articles', function () {
//     return 'Halaman artikel dengan id';
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman artikel dengan id ' . $id;
// });

//Praktikum 2
// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

//Praktikum 3
Route::get('/home', function () {
    return view('home');
});

Route::prefix('category')->group(function () {
    Route::get('/', function () {
        return view('products');
    });
    Route::get('/marbel-edu-games', function () {
        return 'Ini adalah marbel edu games';
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return 'Ini adalah marbel and friends kids games';
    });
    Route::get('/riri-story-books', function () {
        return 'Ini adalah Riri story books';
    });
    Route::get('/kolak-kids-songs', function () {
        return 'Ini adalah Kolak kids songs';
    });
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news/{news}', function ($news) {
    return 'News tentang ' . $news;
});

Route::prefix('program')->group(function () {
    Route::get('/', function () {
        return view('program');
    });
    Route::get('/karir', function () {
        return 'Ini adalah Karir';
    });
    Route::get('/magang', function () {
        return 'Ini adalah Magang';
    });
    Route::get('/kunjungan-industri', function () {
        return 'Ini adalah Kunjungan Industri';
    });
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', [ContactController::class, 'contacts']);
