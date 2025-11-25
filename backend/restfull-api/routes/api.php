<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanoramaController;
use App\Http\Controllers\additionalinformationController;

// Route::get('/user', function (Request $request) {
// //     return $request->user();
// // })->middleware('auth:sanctum');


/* show all panorama project  */
Route::get('/panorama', [PanoramaController::class, 'index']);

/* show specific panorama project */
Route::get('/panorama/{id}', [PanoramaController::class, 'show']);

/* show additional information for a specific panorama */
/* Route::get('/panorama/{id}/additionalinformation', [PanoramaController::class, 'showWithAdditional']);
 */
/* show all additional information */
/* Route::get('/additionalinformation', [additionalinformationController::class, 'index']); */

/* show specific additional information */
/* Route::get('/additionalinformation/{id}', [additionalinformationController::class, 'show']); */

/* delete panorama with panorama id */
Route::delete('/delete/{id}', [CustomerController::class, 'destroy']);