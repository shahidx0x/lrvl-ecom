<?php

use App\Http\Controllers\admin\adminLoginController;
use App\Http\Controllers\admin\protectedController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [adminLoginController::class, 'index'])->name('admin.login');
Route::get('/protected', [protectedController::class, 'index'])->name('admin.protected')->middleware('admin');
