<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::get('usuario', [UserController::class,'index'])->middleware('can:admin.user.home')->name('admin.user.home');
