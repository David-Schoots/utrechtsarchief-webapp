<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanaromaController;

// Route::get('/user', function (Request $request) {
// //     return $request->user();
// // })->middleware('auth:sanctum');


Route::get('/ ',function(){
    return "test";
});

Route::get('/test', [PanaromaController::class, 'index']);