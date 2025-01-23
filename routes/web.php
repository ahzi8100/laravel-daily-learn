<?php

use App\Http\Controllers\CustomValidationController;
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

Route::get('/', function () {
    dd('Welcome to simple user router file.');
});

Route::get('/custom-validation', [CustomValidationController::class, 'create']);
Route::post('/custom-validation', [CustomValidationController::class, 'store'])->name('custom.validation.post');

//Route::fallback(function () {
//    return view('errors');
//});
