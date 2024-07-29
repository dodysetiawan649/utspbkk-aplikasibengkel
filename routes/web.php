<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\customersController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/customers',\App\Http\Controllers\customersController::class);
Route::resource('/pegawai',\App\Http\Controllers\pegawaiController::class);
Route::resource('/supplier',\App\Http\Controllers\supplierController::class);
Route::resource('/keluhan',\App\Http\Controllers\keluhanController::class);
Route::resource('/kendaraan',\App\Http\Controllers\kendaraanController::class);