<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MainController;
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

Route::get('/main',[MainController::class,'index'])->name('main.index');

Route::get('/devices',[DeviceController::class,'index'])->name('device.index');
Route::get('/devices/create',[DeviceController::class,'create'])->name('device.create');
Route::post('/devices',[DeviceController::class,'store'])->name('device.store');
Route::get('/devices/{device}',[DeviceController::class,'show'])->name('device.show');
Route::get('/devices/{device}/edit',[DeviceController::class,'edit'])->name('device.edit');
Route::patch('/devices/{device}',[DeviceController::class,'update'])->name('device.update');
Route::delete('/devices/{device}',[DeviceController::class,'destroy'])->name('device.delete');
