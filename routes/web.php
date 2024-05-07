<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
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

Route::middleware('guest')->group(function () {
    Route::get('/login', [HomeController::class, 'loginPage'])->name('loginPage');
    Route::get('/register', [HomeController::class, 'registerPage'])->name('registerPage');

});

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//Route::middleware(['auth','check-role:A'])->group(function(){
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/users', [HomeController::class, 'users'])->name('users');
Route::put('/updateUser', [HomeController::class, 'updateUser'])->name('updateUser');
Route::post('/createUser', [HomeController::class, 'createUser'])->name('createUser');
Route::delete('/deleteUser/{id}', [HomeController::class, 'deleteUser'])->name('deleteUser');


Route::get('/products', [ProductController::class, 'products'])->name('products');

Route::get('/setting', [SettingController::class, 'setting'])->name('setting');

Route::get('/setting/products', [SettingController::class, 'settingProduct'])->name('settingProduct');
Route::put('/updateProduct', [SettingController::class, 'updateProduct'])->name('updateProduct');
Route::post('/createProduct', [SettingController::class, 'createProduct'])->name('createProduct');


//});

