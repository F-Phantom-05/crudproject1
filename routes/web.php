<?php

use App\Http\Controllers\CompanyController;

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

Route::get('login', [RegAccount::class, 'index'])->name('login');
Route::post('post-login', [RegAccount::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [RegAccount::class, 'registration'])->name('register');
Route::post('post-registration', [RegAccount::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [RegAccount::class, 'dashboard']); 
Route::get('logout', [RegAccount::class, 'logout'])->name('logout');

Route::resource('companies', CompanyController::class);