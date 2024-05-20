<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;

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

Route::prefix('register')->group(function(){
    Route::get('/',[AuthController::class,'register'])->name('register');
    Route::post('/',[AuthController::class,'createAccount'])->name('createAccount');
    // Route::post('/confirm',[AuthController::class,'confirm'])->name('confirm');
    // Route::get('/confirm',[AuthController::class,'confirmRegister'])->name('confirmRegister');
    // Route::get('/district',[AuthController::class,'getDistrict'])->name('district');


 });
Route::get('admin/login',[AuthController::class,'login'])->name('login');
Route::post('admin/check',[AuthController::class,'checkLogin'])->name('checkLogin');
Route::group(['middleware'=>'auth'], function(){
    Route::get('/admin',[AuthController::class,'index'])->name('admin.index');
    Route::get('/admin/logout',[AuthController::class,'logout'])->name('logout');
    Route::prefix('user')->group(function(){
        Route::get('/list',[UserController::class,'index'])->name('listUser');
        Route::get('/add',[UserController::class,'add'])->name('addUser');
        Route::post('/store',[UserController::class,'store'])->name('store');
        Route::get('/edit{id}',[UserController::class,'edit'])->name('editUser');
        Route::post('/update{id}',[UserController::class,'updateUser'])->name('updateUser');
        Route::get('/delete{id}',[UserController::class,'deleteUser'])->name('deleteUser');
        Route::get('/search',[SearchController::class,'search'])->name('search');
        Route::post('/import',[SearchController::class,'importUser'])->name('importUser');
        Route::get('/exportCSV',[SearchController::class,'exportCSV'])->name('exportCSV');


    });

 });   

 