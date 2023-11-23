<?php

use App\Http\Controllers\AuthController;

// Ruta para iniciar sesión
Route::post('/login', [AuthController::class, 'login']);

// Ruta para registrar un nuevo usuario
Route::post('/register', [AuthController::class, 'register']);

// Ruta para cerrar sesión
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);

