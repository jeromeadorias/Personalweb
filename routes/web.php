<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ProjectController::class, 'index'])
    ->name('home');
    
Route::post('/contact', [MessageController::class, 'store'])
    ->name('contact.store');