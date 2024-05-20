<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\customersController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/customers',\App\Http\Controllers\customersController::class);
Route::resource('/pegawai',\App\Http\Controllers\pegawaiController::class);
Route::resource('/supplier',\App\Http\Controllers\supplierController::class);