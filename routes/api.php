<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    AuthController,
    EventController
};

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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(EventController::class)->group(function (){
        Route::get('/events', 'index');
        Route::post('/events', 'store');
        Route::put('/join-event/{event}', 'joinEvent');
        Route::put('/leave-event/{event}', 'leaveEvent');
        Route::delete('/event/{event}', 'delete');
    });
});
