<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PengalamanKuliahController;
use App\Http\Controllers\ProfileController;
use App\Models\HobiModel;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// Route::get('/home', function () {
//     return view('home');
// });

// Route::prefix('category')->group(function () {
//     Route::get('/', function () {
//         return view('products');
//     });
//     Route::get('/marbel-edu-games', function () {
//         return 'Ini adalah marbel edu games';
//     });
//     Route::get('/marbel-and-friends-kids-games', function () {
//         return 'Ini adalah marbel and friends kids games';
//     });
//     Route::get('/riri-story-books', function () {
//         return 'Ini adalah Riri story books';
//     });
//     Route::get('/kolak-kids-songs', function () {
//         return 'Ini adalah Kolak kids songs';
//     });
// });

// Route::get('/news', function () {
//     return view('news');
// });

// Route::get('/news/{news}', function ($news) {
//     return 'News tentang ' . $news;
// });

// Route::prefix('program')->group(function () {
//     Route::get('/', function () {
//         return view('program');
//     });
//     Route::get('/karir', function () {
//         return 'Ini adalah Karir';
//     });
//     Route::get('/magang', function () {
//         return 'Ini adalah Magang';
//     });
//     Route::get('/kunjungan-industri', function () {
//         return 'Ini adalah Kunjungan Industri';
//     });
// });

// Route::get('/about-us', function () {
//     return view('about-us');
// });

// Route::get('/contact-us', [ContactController::class, 'contacts']);

// Praktikum 1 Minggu 3
// Route::get('/', [HomeController::class, 'index']);

// Route::prefix('products')->group(function () {
//     Route::get('/', [HomeController::class, 'products']);

//     Route::get('/{id}', [HomeController::class, 'subproducts']);
// });

// Route::get('/news', [HomeController::class, 'news']);

// Route::get('/news/{news}', [HomeController::class, 'subnews']);

// Route::prefix('program')->group(function () {
//     Route::get('/', [HomeController::class, 'program']);
//     Route::get('/{program}', [HomeController::class, 'subprogram']);
// });

// Route::get('/about-us', [HomeController::class, 'about']);

// Route::get('/contact-us', [ContactController::class, 'contacts']);

//Praktikum 2 Minggu 3
Route::get('/', [DashboardController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/pengalaman-kuliah', [PengalamanKuliahController::class, 'index']);

Route::get('/kendaraan', [KendaraanController::class, 'index']);

Route::get('/hobi', [HobiController::class, 'index']);
