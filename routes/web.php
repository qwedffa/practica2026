<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/options', [OptionController::class, 'index']);
Route::get('/options{post}', [OptionController::class, 'show']);
Route::post('/options', [OptionController::class, 'store']);
Route::patch('/options{post}', [OptionController::class, 'update']);
Route::delete('/options{post}', [OptionController::class, 'destroy']);
