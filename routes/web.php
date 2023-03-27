<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\NilaiController;
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
    Route::get('/student-add', 'create');
    Route::post('/student', 'store');
    Route::get('/student-edit/{id}', 'edit');
    Route::put('/student/{id}', 'update');
    Route::delete('/student-destroy/{id}', 'destroy');
    Route::get('/student-deleted', 'deletedStudent');
    Route::get('/student/{id}/restore', 'restore');
});

Route::controller(TeacherController::class)->group(function () {
    Route::get('/teacher', 'index');
    Route::get('/teacher-detail/{id}', 'show');
    Route::get('/teacher-add', 'create');
    Route::post('/teacher', 'store');
    Route::get('/teacher-edit/{id}', 'edit');
    Route::put('/teacher/{id}', 'update');
    Route::delete('/teacher-destroy/{id}', 'destroy');
    Route::get('/teacher-deleted', 'deletedTeacher');
    Route::get('/teacher/{id}/restore', 'restore');
});

Route::controller(JurusanController::class)->group(function () {
    Route::get('/jurusan', 'index');
    Route::get('/jurusan-detail/{id}', 'show');
    Route::get('/jurusan-add', 'create');
    Route::post('/jurusan', 'store');
    Route::get('/jurusan-edit/{id}', 'edit');
    Route::put('/jurusan/{id}', 'update');

    Route::delete('/jurusan-destroy/{id}', 'destroy');
    Route::get('/jurusan-deleted', 'deletedJurusan');
    Route::get('/jurusan/{id}/restore', 'restore');
});

Route::controller(ClassController::class)->group(function () {
    Route::get('/class', 'index');
    Route::get('/class-detail/{id}', 'show');
    Route::get('/class-add', 'create');
    Route::post('/class', 'store');
    Route::get('/class-edit/{id}', 'edit');
    Route::put('/class/{id}', 'update');

    Route::delete('/student-destroy/{id}', 'destroy');
    Route::get('/student-deleted', 'deletedStudent');
    Route::get('/student/{id}/restore', 'restore');
});

Route::controller(MataPelajaranController::class)->group(function () {
    Route::get('/mapel', 'index');
    Route::get('/mapel-detail/{id}', 'show');
    Route::get('/mapel-add', 'create');
    Route::post('/mapel', 'store');
    Route::get('/mapel-edit/{id}', 'edit');
    Route::put('/mapel/{id}', 'update');

    Route::delete('/student-destroy/{id}', 'destroy');
    Route::get('/student-deleted', 'deletedStudent');
    Route::get('/student/{id}/restore', 'restore');
});

Route::controller(NilaiController::class)->group(function () {
    Route::get('/nilai', 'index');
    Route::get('/nilai-detail/{id}', 'show');
    Route::get('/nilai-add', 'create');
    Route::post('/nilai', 'store');

    Route::get('/nilai-edit/{id}', 'edit');
    Route::post('/nilai/{id}', 'update');
});