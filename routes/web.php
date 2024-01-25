<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/save_tasks', [TaskController::class, 'store']);

Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');

Route::get('/edit_task/{task}', [TaskController::class, 'edit']);

Route::put('/edit_task/{task}', [TaskController::class, 'update'])->name('task.update');

Route::get('/delete_task/{id}', [TaskController::class, 'destroy']);
