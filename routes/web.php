<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmireController;

Route::get('/layouts', function(){
    return view('layouts');
});

Route::get('/dashboard', [AdmireController::class, 'dashboard']);
Route::get('/login', [AdmireController::class, 'login']);
