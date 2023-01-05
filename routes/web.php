<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\LaboranController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//peminjam
Route::get('/',[PeminjamController::class , 'index']);
Route::get('/create',[PeminjamController::class , 'create'])->name('create');
Route::get('/list-peminjaman',[PeminjamController::class , 'indexPeminjaman'])->name('indexPeminjaman');
Route::post('/store-peminjaman',[PeminjamController::class, 'storePeminjaman'])->name('storePeminjaman');


//login
Route::get('/login',[AuthController::class, 'indexLogin'])->name('login');
Route::post('/login',[AuthController::class, 'auth'])->name('auth');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');


//laboran

Route::post('/approve-peminjaman',[LaboranController::class, 'approvePeminjaman'])->name('approve')->middleware('auth');


//admin indexDataLaboran storeDataLaboran deleteLaboranData createDataLaptop
Route::middleware(['isAdmin', 'auth'])->group(function() {
     Route::get('/dashboard',[AdminController::class, 'indexPeminjaman'])->name('peminjaman')->middleware('isAdmin');
     Route::get('/indexDataLaptop',[AdminController::class, 'indexDataLaptop'])->name('dataLaptop');
     Route::get('/indexDataLaboran',[AdminController::class, 'indexDataLaboran'])->name('account');
     Route::get('/create-account-laboran',[AdminController::class, 'createDataLaboran'])->name('createAccount');
     Route::post('/store-account-laboran',[AdminController::class, 'storeDataLaboran'])->name('storeDataLaboran');
     
     Route::get('/edit-laboran/{id}',[AdminController::class, 'editLaboranData'])->name('editLaboran');
     Route::post('/update-laboran/{id}',[AdminController::class, 'updateLaboranData'])->name('updateLaboranData');
     Route::get('/delete-laboran/{id}',[AdminController::class, 'deleteLaboranData'])->name('deleteLaboranData');
     
     Route::get('/create-data-laptop',[AdminController::class, 'createDataLaptop'])->name('createDataLaptop');
     Route::post('/store-data-laptop',[AdminController::class, 'storeDataLaptop'])->name('storeDataLaptop');
     Route::get('/delete-laptop/{id}',[AdminController::class, 'deleteLaptopData'])->name('deleteLaptopData');
});


