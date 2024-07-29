<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MeasureController;

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

Route::middleware('guest')->group(function () {
    Route::get('/login', [HomeController::class, 'loginPage'])->name('loginPage');
    Route::get('/register', [HomeController::class, 'registerPage'])->name('registerPage');

});

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//Route::middleware(['auth','check-role:A'])->group(function(){
Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/users', [UserController::class, 'users'])->name('users');


Route::get('/products', [ProductController::class, 'products'])->name('products');

Route::get('/setting', [HomeController::class, 'setting'])->name('setting');

Route::get('/setting/products', [MainProductController::class, 'product'])->name('settingProduct');
Route::get('/setting/countries', [CountryController::class, 'country'])->name('country');
Route::get('/setting/companies', [CompanyController::class, 'company'])->name('company');
Route::get('/setting/categories', [CategoryController::class, 'index'])->name('category');
Route::get('/setting/measures', [MeasureController::class, 'index'])->name('measure');


//});

