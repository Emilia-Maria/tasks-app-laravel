<?php

use App\Models\Task;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TaskController::class, 'index']);
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create'); // Specific route for create form
Route::resource('tasks', TaskController::class); // Resource route for CRUD operations
