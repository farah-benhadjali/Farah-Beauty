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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MakeupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckouController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\intUserController;
use App\Http\Controllers\intAdminController;
use App\Http\Controllers\PanierController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/makeup', [MakeupController::class, 'index'])->name('makeup');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckouController::class, 'index'])->name('checkout');
Route::get('/connexion', [ConnexionController::class, 'index'])->name('connexion');
Route::get('/intUser', [intUserController::class, 'index'])->name('intUser');
Route::get('/intAdmin', [intAdminController::class, 'index'])->name('intAdmin');
Route::get('/panier', [PanierController::class, 'index'])->name('panier');