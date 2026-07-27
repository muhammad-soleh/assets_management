<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['admin']);

Route::middleware(['admin', 'auth'])->group(function () {
    Route::get('/employees', [EmployeeController::class, 'index']);
    Route::get('/employees/form', [EmployeeController::class, 'form']);
    Route::post('/employees/form', [EmployeeController::class, 'submit']);
    Route::get('/departments', [DepartmentController::class, 'index']);
    Route::get('/departments/form', [DepartmentController::class, 'form']);
    Route::post('/departments/form', [DepartmentController::class, 'submit']);
    Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/locations/form', [LocationController::class, 'form']);
    Route::post('/locations/form', [LocationController::class, 'submit']);
    Route::get('/roles', [RoleController::class, 'index']);
    Route::get('/roles/form', [RoleController::class, 'form']);
    Route::post('/roles/form', [RoleController::class, 'submit']);
});
