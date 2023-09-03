<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

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


Route::get('/',[AdminController::class,'home'])->name('home');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::post('/logout',[AdminController::class,'logout'])->name('logout');
Route::get('/admindashboard',[AdminController::class,'admindashboard' ])->name('admindashboard');

Route::get('/layouts-static-navigation',[AdminController::class,'static_navigation' ])->name('static_navigation');
Route::get('/layouts-sidenav-light',[AdminController::class,'sidenav' ])->name('layout-sidenav-light');
Route::get('/charts',[AdminController::class,'charts' ])->name('charts');
Route::get('/tables',[AdminController::class,'tables' ])->name('tables');




