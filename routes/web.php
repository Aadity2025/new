<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'homeAction'])->name('home');
Route::get('/about', [HomeController::class, 'aboutAction'])->name('about');
Route::get('/services', [HomeController::class, 'servicesAction'])->name('services');
Route::get('/products', [HomeController::class, 'productsAction'])->name('products');
Route::get('/contact', [HomeController::class, 'contactAction'])->name('contact');

Auth::routes();
