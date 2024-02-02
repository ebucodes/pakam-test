<?php

use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//
Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});
//
Route::middleware('auth:sanctum')->group(function () {
    Route::group(['prefix' => 'assessment'], function () {
        Route::get('list', [AssessmentController::class, 'index']);
        Route::post('store', [AssessmentController::class, 'store']);
        Route::put('update/{id}', [AssessmentController::class, 'update']);
        Route::delete('delete/{id}', [AssessmentController::class, 'destroy']);
    });
});
