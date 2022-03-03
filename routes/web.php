<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Route as RoutingRoute;

use App\Http\Controllers\PageController;

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

//--------------------PRAKTIKUM 1-----------------
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();


// Route::get('/home', [HomeController::class, 'home']);

// // Route::prefix('product')->group(function(){
// //     Route::get('/',[HomeController::class, 'product']);


// Route ::get('/product', [HomeController::class, 'product']);
    


// Route::get('/news/{id}', [HomeController::class, 'news']);

//     Route::prefix('program')->group(function(){
//         Route::get('/',[HomeController::class, 'Program']);
//     });

// Route::get('/about', [HomeController::class, 'about']);

// Route::get('/contact', [HomeController::class, 'contact']);


//---------------PRAKTIKUM 2 -----------------//
Route::get('/index', [PageController::class, 'index']);

Route::get('/home', [PageController::class, 'home']);

Route::get('/product', [PageController::class, 'product']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/header', [PageController::class, 'header']);

Route::get('/footer', [PageController::class, 'footer']);
