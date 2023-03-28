<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Halaman utama
Route::get('/', [HomeController::class, 'index']);

// create
Route::get('/tasks', [TaskController::class, 'index'])->middleware('is_admin');
Route::get('tasks/create', [TaskController::class, 'create']);

// read
// halaman index
Route::get('/tasks/{id}', [TaskController::class, 'show']);
Route::post('/tasks', [TaskController::class, 'store']);

// Update
Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
Route::patch('tasks/{id}', [TaskController::class, 'update']);

// Delete
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);
