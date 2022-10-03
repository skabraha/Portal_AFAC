<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadXmlController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::get('usuario', [UserController::class,'index'])->middleware('can:admin.user.home')->name('admin.user.home');

Route::post("read-xml", [ReadXmlController::class, "index"])->name('xml-upload');

Route::get('/payment', function () {
    return view('/admin/payment');
})->name('busqueda');

Route::get('/access', function () {
    return view('/admin/access');
})->name('cuentas');
Route::get('/admin_import', function () {
    return view('/admin/import');
})->name('admin_import');
Route::get('/history', function () {
    return view('/admin/history');
})->name('bitacora');