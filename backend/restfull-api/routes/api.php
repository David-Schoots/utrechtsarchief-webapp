<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanoramaController;

// Route::get('/user', function (Request $request) {
// //     return $request->user();
// // })->middleware('auth:sanctum');


/* show all panorama project  */
Route::get('/panorama', [PanoramaController::class, 'index']);

/* show specific panorama project */
Route::get('/panorama/{id}', [PanoramaController::class, 'show']);

/* delete panorama with panorama id */
Route::delete('/delte/{id}', [CustomerController::class, 'destroy']);