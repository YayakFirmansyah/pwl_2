<?php

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
Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);
