<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::prefix('admin')->group(function () {
    Route::get('', [AdministradorController::class,'index']);
    Route::get('/{i}', [AdministradorController::class,'show']);
    Route::post('',[AdministradorController::class,'store']);
    Route::put('/{i}',[AdministradorController::class,'update']);
    Route::delete('/{i}',[AdministradorController::class,'destroy']);
});
