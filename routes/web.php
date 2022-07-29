<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/listing/{category}/{layout}', [PageController::class,'viewListing']);

//tourist register
Route::post('/register', [UserController::class,'register']);

//rourist login
Route::post('/login', [UserController::class,'login']);

//tourist logout
Route::get('/logout', [UserController::class,'logout']);

// Route::get('/list-layout', function () {
//     return view('list-layout');
// });

// Route::get('/grid-layout', function () {
//     return view('grid-layout');
// });





