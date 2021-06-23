<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Esta rota lista todas as tarefas.
Route::get('/tasks', [TaskController::class, 'index']);

//Esta rota lista somente uma única tarefa.
Route::get('/task/{id}', [TaskController::class, 'show']);

//Esta rota insere uma nova tarefa.
Route::post('/task', [TaskController::class, 'store']);

//Esta rota edita uma única tarefa.
Route::put('/task/{id}', [TaskController::class, 'update']);

//Esta rota deleta uma tarefa.
Route::delete('/task/{id}', [TaskController::class, 'destroy']);
