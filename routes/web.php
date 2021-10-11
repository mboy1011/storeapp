<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;

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

// Route::get('/', function () {
//     return view('home');
// });
// Home
Route::get('/', [Home::class, 'index']);
// Posts 
Route::get('/posts', [Posts::class, 'index']);
Route::get('/posts/create', [Posts::class, 'create']);
// Login
Route::get('/login', [Login::class, 'index']);
