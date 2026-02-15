<?php

use App\Http\Controllers\Api\DomainController;
use App\Http\Controllers\Api\GodController;
use App\Http\Controllers\Api\PantheonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/gods", [GodController::class, "index"]);
Route::get("/gods/{god}", [GodController::class, "show"]);

Route::get("/pantheons", [PantheonController::class, "index"]);
Route::get("/pantheons/{pantheon}", [PantheonController::class, "show"]);

Route::get("/domains", [DomainController::class, "index"]);
Route::get("/domains/{domain}", [DomainController::class, "show"]);
