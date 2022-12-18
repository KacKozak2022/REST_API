<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

Route::get('Kozak/305378', [PeopleController::class, 'index']);
Route::get('Kozak/305378/{id}', [PeopleController::class, 'show']);
Route::put('Kozak/305378/{id}', [PeopleController::class, 'update']);
Route::delete('Kozak/305378/{id}', [PeopleController::class, 'destroy']);
Route::post('Kozak/305378/{id}', [PeopleController::class, 'create']);
