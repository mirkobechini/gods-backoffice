<?php

use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\GodController;
use App\Http\Controllers\Admin\PantheonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("gods", GodController::class)
    ->middleware(["auth", "verified"]);

Route::resource("domains", DomainController::class)
    ->middleware(["auth", "verified"]);

Route::resource("pantheons", PantheonController::class)
    ->middleware(["auth", "verified"]);

require __DIR__.'/auth.php';
