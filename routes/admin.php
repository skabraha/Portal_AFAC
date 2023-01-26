<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Livewire\Admin\SelectComponent;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

// Route::get('usuario', [UserController::class, 'index'])->middleware('can:admin.user.home')->name('admin.user.home');

Route::get('usuario', function () {
    return view('/admin/user/index');
})->middleware('can:admin.user.home')->name('admin.user.home');

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

Route::controller(DataController::class)->group(function () {
    Route::get('datas', 'index');
    Route::get('datas-export', 'export')->name('datas.export');
    Route::post('datas-import', 'import')->name('datas.import');
});

Route::get('imprimir', [SelectComponent::class, 'imprimePdf'])->name('imprimir');
// Route::name('imprimir')->get('/imprimir',[DataController::class, 'imprimir']);
