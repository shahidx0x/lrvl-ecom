<?php

use App\Http\Controllers\admin\adminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login',[adminLoginController::class,'index'])->name('admin.login');
