<?php

use App\Http\Controllers\CompanyController;
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
    return view('welcome');
});

Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::get('/company/index',[CompanyController::class,'index'])->name('company.index');
 Route::get('/company/create',[CompanyController::class,'create'])->name('company.create');
 Route::post('/company/stores',[CompanyController::class,'store'])->name('company.store');
 Route::get('/company/{company}',[CompanyController::class,'show'])->name('company.show');
 Route::get("/{company}/edit",[CompanyController::class,'edit'])->name('company.edit');
 Route::put("/{company}",[CompanyController::class,'update'])->name('company.update');
 Route::delete("/{company}",[CompanyController::class,'destroy'])->name('company.destroy');

