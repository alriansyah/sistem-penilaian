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
});

Route::controller(TeacherController::class)->group(function () {
    Route::get('/teacher', 'index');
});

Route::controller(JurusanController::class)->group(function () {
    Route::get('/jurusan', 'index');
});

Route::controller(ClassController::class)->group(function () {
    Route::get('/class', 'index');
});

Route::controller(MataPelajaranController::class)->group(function () {
    Route::get('/mp', 'index');
});