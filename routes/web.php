<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::resource('users', UserController::class);
});

// Rutas para el sistema de gestión de tareas
Route::middleware('auth')->group(function () {
    // Ruta para la lista de tareas
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

    // Ruta para el formulario de creación de tareas
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

    // Ruta para guardar una nueva tarea
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

    // Ruta para el formulario de edición de una tarea
    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

    // Ruta para actualizar una tarea existente
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

    // Ruta para eliminar una tarea
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

});


// Ruta para listar usuarios
Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // Ruta para mostrar formulario de creación de usuario
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

    // Ruta para guardar nuevo usuario
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

    // Ruta para mostrar formulario de edición de usuario
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

    // Ruta para actualizar usuario
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

    // Ruta para eliminar usuario
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__.'/auth.php';
