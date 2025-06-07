<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\DespesaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('receitas', ReceitaController::class)->names([
    'index' => 'receitas.index',
    'create' => 'receitas.create',
    'store' => 'receitas.store',
    'show' => 'receitas.show',
    'edit' => 'receitas.edit',
    'update' => 'receitas.update',
    'destroy' => 'receitas.destroy'
])->middleware(['auth']);

Route::resource('despesas', DespesaController::class)->names([
    'index' => 'despesas.index',
    'create' => 'despesas.create',
    'store' => 'despesas.store',
    'show' => 'despesas.show',
    'edit' => 'despesas.edit',
    'update' => 'despesas.update',
    'destroy' => 'despesas.destroy'
]);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
