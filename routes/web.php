<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MataPelajaranController;

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
    return view('dashboard');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/student', 'index');
    Route::get('/student-detail/{id}', 'show');
    Route::get('/student-add/{id}', 'create');
});

Route::controller(TeacherController::class)->group(function () {
    Route::get('/teacher', 'index');
    Route::get('/teacher-detail/{id}', 'show');
});

Route::controller(JurusanController::class)->group(function () {
    Route::get('/jurusan', 'index');
    Route::get('/jurusan-detail/{id}', 'show');
});

Route::controller(ClassController::class)->group(function () {
    Route::get('/class', 'index');
    Route::get('/class-detail/{id}', 'show');
});

Route::controller(MataPelajaranController::class)->group(function () {
    Route::get('/mapel', 'index');
    Route::get('/mapel-detail/{id}', 'show');
});