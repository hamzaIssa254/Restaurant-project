<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use app\Http\Controllers\TableController;


use app\Http\Controllers\Admin\CategoryController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Auth.login');
});

Auth::routes(['register' => false]); //إيقاف عمل راوت تسجيل الدخول

Route::get('/home', [HomeController::class, 'index'])->name('home');




Route::resource('tables',TableController::class);






Route::resource('/categories',CategoryController::class);







