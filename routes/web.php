<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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

Route::prefix('employees')->controller(EmployeeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'submit');
    Route::get('/{employee}/edit', 'edit');
    Route::put('/{employee}/edit', 'update');
});

Route::prefix('departments')->controller(DepartmentController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'submit');
    Route::get('/{department}/edit', 'edit');
    Route::put('/{department}/edit', 'update');
});

Route::prefix('locations')->controller(LocationController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'submit');
    Route::get('/{location}/edit', 'edit');
    Route::put('/{location}/edit', 'update');
});

Route::prefix('roles')->controller(RoleController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'submit');
    Route::get('/{role}/edit', 'edit');
    Route::put('/{role}/edit', 'update');
});

Route::prefix('categories')->controller(CategoryController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'submit');
    Route::get('/{category}/edit', 'edit');
    Route::put('/{category}/edit', 'update');
});
