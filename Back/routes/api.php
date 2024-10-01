<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\horarios\AulaController;


Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/super-admin/administration', [StudentController::class, 'index']);
    Route::get('/students/{id}', [StudentController::class, 'indexById']);
    Route::post('/students/profile-photo', [StudentController::class, 'updateProfilePhoto']);
    Route::patch('/students/{id}', [StudentController::class, 'updateApprovalStatus']);
    Route::delete('/students/delete/{id}', [StudentController::class, 'destroy']);
});

Route::post('/signup/super-admin', [AuthController::class, 'signupSuperAdmin']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/password/forgot', [AuthController::class, 'forgotPassword']);
Route::post('/password/reset', [AuthController::class, 'resetPassword']);
Route::get('/verify-token/{token}', [AuthController::class, 'verifyResetToken']);

Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('auth/google/callback', function () {
    $user = Socialite::driver('google')->user();
});

Route::post('/auth/google/callback', [AuthController::class, 'googleCallback']);



//------------------------------------------------------------------------------------------------------------------------------------------------
// Swagger

// Aulas
Route::get('/aulas', [AulaController::class, 'index']);
Route::get('/aulas/{id}', [AulaController::class, 'show']);
Route::post('/aulas', [AulaController::class, 'store']);
Route::put('/aulas/actualizar/{id}', [AulaController::class, 'update']);
Route::delete('/aulas/eliminar/{id}', [AulaController::class, 'destroy']);

// Grados
Route::get('/grados', [GradoController::class, 'index']);
Route::get('/grados/{id}', [GradoController::class, 'show']);
Route::post('/grados', [GradoController::class, 'store']);
Route::put('/grados/actualizar/{id}', [GradoController::class, 'update']);
Route::delete('/grados/eliminar/{id}', [GradoController::class, 'destroy']);

// GradosUc
Route::get('/grado-uc', [GradoUcController::class, 'index']); 
Route::get('/grado-uc/{id}', [GradoUcController::class, 'show']); 
Route::post('/grado-uc', [GradoUcController::class, 'store']); 
Route::put('/grado-uc/actualizar/{id}', [GradoUcController::class, 'update']); 
Route::delete('/grado-uc/eliminar/{id}', [GradoUcController::class, 'destroy']); 