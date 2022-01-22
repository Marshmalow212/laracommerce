<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/master', function () {
    return view('components.master');
});
Route::get('/', function () {
    return view('components.index');
});
Route::get('/products', function () {
    return view('components.products');
});

Route::get('/register', function () {
    return view('components.register');
});

Route::post('/register',[UsersController::class,'store']);


