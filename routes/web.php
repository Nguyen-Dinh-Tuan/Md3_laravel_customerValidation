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

Route::get('/', function () {
    return view('welcome');
});
Route::get('customer-validation', [\App\Http\Controllers\FormController::class, 'checkValidation'])->name('form.submit');
Route::get('create', [\App\Http\Controllers\PostController::class, 'create']);
Route::post('store', [\App\Http\Controllers\PostController::class, 'store'])->name('store');

Route::get('form', [\App\Http\Controllers\FormCustomController::class,'checkVal'])->name('form.submit');
