<?php

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
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
Route::get('/categories', [MainController::class, 'categories']);
Route::get('/{category}', [MainController::class, 'category']);
Route::get('/mobiles/{product?}', [MainController::class, 'product']);

