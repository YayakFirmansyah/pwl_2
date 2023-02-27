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
Route::get('/', [HomeController::class, 'index']);

Route::prefix('products')->group(function () {
    Route::get('/', [HomeController::class, 'products']);

    Route::get('/{id}', [HomeController::class, 'subproducts']);
});

Route::get('/news', [HomeController::class, 'news']);

Route::get('/news/{news}', [HomeController::class, 'subnews']);

Route::prefix('program')->group(function () {
    Route::get('/', [HomeController::class, 'program']);
    Route::get('/{program}', [HomeController::class, 'subprogram']);
});

Route::get('/about-us', [HomeController::class, 'about']);

Route::get('/contact-us', [ContactController::class, 'contacts']);
