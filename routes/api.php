<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SpecialistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::post('/login', function (Request $request) {
    if (Auth::attempt($request->only(['email', 'password'])) === false) {
        return response()->json('Unauthorized', 401);
    }

    return response('Ok');
});

Route::middleware('auth')->group(function () {
    Route::apiResource('/specialists', SpecialistController::class);
    Route::apiResource('specialists.reviews', ReviewController::class);
});
