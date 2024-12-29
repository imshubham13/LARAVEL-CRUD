<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PersonController::class , 'index']);

Route::post('/submit', [PersonController::class , 'create']);

Route::get('/login', [PersonController::class , 'login']);

Route::post('/checklogin',[PersonController::class , 'checklogin']);

Route::get('/home', [PersonController::class, 'display']);

Route::get('/allData', [PersonController::class, 'allData']);

Route::get('/delete/{id}',[PersonController::class,'delete']);



