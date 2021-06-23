<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/task/{id}', [TaskController::class, 'show']);

Route::post('/task', [TaskController::class, 'store']);

Route::put('/task/{id}', [TaskController::class, 'update']);

Route::delete('/task/{id}', [TaskController::class, 'destroy']);
