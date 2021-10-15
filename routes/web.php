<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[PagesController::class, 'index']);
Route::get('/phones',[PagesController::class, 'phones'])->name('phones');
Route::get('/computer',[PagesController::class, 'computer'])->name('computer');
Route::get('/about',[PagesController::class, 'about'])->name('about');
Route::get('/policy',[PagesController::class, 'policy'])->name('policy');
Route::get('/others',[PagesController::class, 'others'])->name('others');
Route::get('/articles',[PagesController::class, 'articles'])->name('articles');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
