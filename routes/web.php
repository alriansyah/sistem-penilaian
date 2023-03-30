<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherDashboardController;

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
})->middleware('auth:student,web,teacher');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'authenticating')->middleware('guest');
    Route::get('/logout', 'logout')->middleware(['auth:student,web,teacher']);
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/student', 'index')->middleware('auth:student,web,teacher');
    Route::get('/student-detail/{id}', 'show')->middleware('auth:student,web,teacher');
    Route::get('/student-add', 'create')->middleware('auth:student,web,teacher');
    Route::post('/student', 'store')->middleware('auth:student,web,teacher');
    Route::get('/student-edit/{id}', 'edit')->middleware('auth:student,web,teacher');
    Route::put('/student/{id}', 'update')->middleware('auth:student,web,teacher');
    Route::delete('/student-destroy/{id}', 'destroy')->middleware('auth:student,web,teacher');
    Route::get('/student-deleted', 'deletedStudent')->middleware('auth:student,web,teacher');
    Route::get('/student/{id}/restore', 'restore')->middleware('auth:student,web,teacher');
});

Route::controller(TeacherController::class)->group(function () {
    Route::get('/teacher', 'index')->middleware('auth:student,web,teacher');
    Route::get('/teacher-detail/{id}', 'show')->middleware('auth:student,web,teacher');
    Route::get('/teacher-add', 'create')->middleware('auth:student,web,teacher');
    Route::post('/teacher', 'store')->middleware('auth:student,web,teacher');
    Route::get('/teacher-edit/{id}', 'edit')->middleware('auth:student,web,teacher');
    Route::put('/teacher/{id}', 'update')->middleware('auth:student,web,teacher');
    Route::delete('/teacher-destroy/{id}', 'destroy')->middleware('auth:student,web,teacher');
    Route::get('/teacher-deleted', 'deletedTeacher')->middleware('auth:student,web,teacher');
    Route::get('/teacher/{id}/restore', 'restore')->middleware('auth:student,web,teacher');
});

Route::controller(JurusanController::class)->group(function () {
    Route::get('/jurusan', 'index')->middleware('auth:student,web,teacher');
    Route::get('/jurusan-detail/{id}', 'show')->middleware('auth:student,web,teacher');
    Route::get('/jurusan-add', 'create')->middleware('auth:student,web,teacher');
    Route::post('/jurusan', 'store')->middleware('auth:student,web,teacher');
    Route::get('/jurusan-edit/{id}', 'edit')->middleware('auth:student,web,teacher');
    Route::put('/jurusan/{id}', 'update')->middleware('auth:student,web,teacher');
    Route::delete('/jurusan-destroy/{id}', 'destroy')->middleware('auth:student,web,teacher');
    Route::get('/jurusan-deleted', 'deletedJurusan')->middleware('auth:student,web,teacher');
    Route::get('/jurusan/{id}/restore', 'restore')->middleware('auth:student,web,teacher');
});

Route::controller(ClassController::class)->group(function () {
    Route::get('/class', 'index')->middleware('auth:student,web,teacher');
    Route::get('/class-detail/{id}', 'show')->middleware('auth:student,web,teacher');
    Route::get('/class-add', 'create')->middleware('auth:student,web,teacher');
    Route::post('/class', 'store')->middleware('auth:student,web,teacher');
    Route::get('/class-edit/{id}', 'edit')->middleware('auth:student,web,teacher');
    Route::put('/class/{id}', 'update')->middleware('auth:student,web,teacher');
    Route::delete('/class-destroy/{id}', 'destroy')->middleware('auth:student,web,teacher');
    Route::get('/class-deleted', 'deletedClass')->middleware('auth:student,web,teacher');
    Route::get('/class/{id}/restore', 'restore')->middleware('auth:student,web,teacher');
});

Route::controller(MataPelajaranController::class)->group(function () {
    Route::get('/mapel', 'index')->middleware('auth:student,web,teacher');
    Route::get('/mapel-detail/{id}', 'show')->middleware('auth:student,web,teacher');
    Route::get('/mapel-add', 'create')->middleware('auth:student,web,teacher');
    Route::post('/mapel', 'store')->middleware('auth:student,web,teacher');
    Route::get('/mapel-edit/{id}', 'edit')->middleware('auth:student,web,teacher');
    Route::put('/mapel/{id}', 'update')->middleware('auth:student,web,teacher');
    Route::delete('/mapel-destroy/{id}', 'destroy')->middleware('auth:student,web,teacher');
    Route::get('/mapel-deleted', 'deletedMapel')->middleware('auth:student,web,teacher');
    Route::get('/mapel/{id}/restore', 'restore')->middleware('auth:student,web,teacher');
});

Route::controller(NilaiController::class)->group(function () {
    Route::get('/nilai', 'index')->middleware('auth:student,web,teacher');
    Route::get('/nilai-detail/{id}', 'show')->middleware('auth:student,web,teacher');
    Route::get('/nilai-add', 'create')->middleware('auth:student,web,teacher');
    Route::post('/nilai', 'store')->middleware('auth:student,web,teacher');
    Route::get('/nilai-edit/{id}', 'edit')->middleware('auth:student,web,teacher');
    Route::post('/nilai/{id}', 'update')->middleware('auth:student,web,teacher');
});


// Dashboard Student
Route::controller(StudentDashboardController::class)->group(function () {
    Route::get('/student/dashboard', 'index')->middleware('auth:student');
});


// Dashboard Taecher
Route::controller(TeacherDashboardController::class)->group(function () {
    Route::get('/teacher/dashboard', 'index')->middleware('auth:teacher');
});