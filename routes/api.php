<?php

use App\Http\Controllers\PersonsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('', [PersonsController::class, 'index']);

Route::get('/{person:id}', [PersonsController::class, 'show']);

Route::post('/', [PersonsController::class, 'store']);

Route::patch('/{person:id}', [PersonsController::class, 'update']);

Route::delete('/{person:id}', [PersonsController::class, 'destroy']);


