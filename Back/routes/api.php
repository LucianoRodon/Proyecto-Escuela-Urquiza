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

// Route::get('auth/google', function () {
//     return Socialite::driver('google')->redirect();
// });

// Route::get('auth/google/callback', function () {
//     $user = Socialite::driver('google')->user();
// });

Route::post('/auth/google/callback', [AuthController::class, 'googleCallback']);



//------------------------------------------------------------------------------------------------------------------------------------------------
// Swagger

// Aulas
Route::get('/horarios/aulas', [AulaController::class, 'index']);
Route::get('/horarios/aulas/{id}', [AulaController::class, 'show']);
Route::post('/horarios/aulas', [AulaController::class, 'store']);
Route::put('/horarios/aulas/actualizar/{id}', [AulaController::class, 'update']);
Route::delete('/horarios/aulas/eliminar/{id}', [AulaController::class, 'destroy']);

// Grados
Route::get('/horarios/grados', [GradoController::class, 'index']);
Route::get('/horarios/grados/{id}', [GradoController::class, 'show']);
Route::post('/horarios/grados', [GradoController::class, 'store']);
Route::put('/horarios/grados/actualizar/{id}', [GradoController::class, 'update']);
Route::delete('/horarios/grados/eliminar/{id}', [GradoController::class, 'destroy']);

// GradosUc
Route::get('/horarios/grado-uc', [GradoUcController::class, 'index']); 
Route::get('/horarios/grado-uc/{id}', [GradoUcController::class, 'show']); 
Route::post('/horarios/grado-uc', [GradoUcController::class, 'store']); 
Route::put('/horarios/grado-uc/actualizar/{id}', [GradoUcController::class, 'update']); 
Route::delete('/horarios/grado-uc/eliminar/{id}', [GradoUcController::class, 'destroy']); 