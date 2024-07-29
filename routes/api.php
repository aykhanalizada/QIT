<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\MainProductController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MeasureController;

Route::post('/updateUser', [UserController::class, 'updateUser'])->name('updateUser');
Route::post('/createUser', [UserController::class, 'createUser'])->name('createUser');
Route::post('/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

Route::post('/updateProduct', [MainProductController::class, 'updateProduct'])->name('updateProduct');
Route::post('/createProduct', [MainProductController::class, 'createProduct'])->name('createProduct');
Route::post('/deleteProduct/{id}', [MainProductController::class, 'deleteProduct'])->name('deleteProduct');


Route::post('/updateCountry', [CountryController::class, 'update'])->name('updateCountry');
Route::post('/createCountry', [CountryController::class, 'create'])->name('createCountry');
Route::post('/deleteCountry/{id}', [CountryController::class, 'delete'])->name('deleteCountry');

Route::post('/updateCompany', [CompanyController::class, 'update'])->name('updateCompany');
Route::post('/createCompany', [CompanyController::class, 'create'])->name('createCompany');
Route::post('/deleteCompany/{id}', [CompanyController::class, 'delete'])->name('deleteCompany');

Route::post('/updateCategory', [CategoryController::class, 'update'])->name('updateCategory');
Route::post('/createCategory', [CategoryController::class, 'create'])->name('createCategory');
Route::post('/deleteCategory/{id}', [CategoryController::class, 'delete'])->name('deleteCategory');

Route::post('/updateMeasure', [MeasureController::class, 'update'])->name('updateMeasure');
Route::post('/createMeasure', [MeasureController::class, 'create'])->name('createMeasure');
Route::post('/deleteMeasure/{id}', [MeasureController::class, 'delete'])->name('deleteMeasure');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
