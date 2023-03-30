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
})->middleware(['auth:web,student,teacher', 'admin']);

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'authenticating')->middleware('guest');
    Route::get('/logout', 'logout')->middleware('auth:student,web,teacher');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/student', 'index')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/student-detail/{id}', 'show')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/student-add', 'create')->middleware(['auth:web,student,teacher', 'admin']);
    Route::post('/student', 'store')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/student-edit/{id}', 'edit')->middleware(['auth:web,student,teacher', 'admin']);
    Route::put('/student/{id}', 'update')->middleware(['auth:web,student,teacher', 'admin']);
    Route::delete('/student-destroy/{id}', 'destroy')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/student-deleted', 'deletedStudent')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/student/{id}/restore', 'restore')->middleware(['auth:web,student,teacher', 'admin']);
});

Route::controller(TeacherController::class)->group(function () {
    Route::get('/teacher', 'index')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/teacher-detail/{id}', 'show')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/teacher-add', 'create')->middleware(['auth:web,student,teacher', 'admin']);
    Route::post('/teacher', 'store')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/teacher-edit/{id}', 'edit')->middleware(['auth:web,student,teacher', 'admin']);
    Route::put('/teacher/{id}', 'update')->middleware(['auth:web,student,teacher', 'admin']);
    Route::delete('/teacher-destroy/{id}', 'destroy')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/teacher-deleted', 'deletedTeacher')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/teacher/{id}/restore', 'restore')->middleware(['auth:web,student,teacher', 'admin']);
});

Route::controller(JurusanController::class)->group(function () {
    Route::get('/jurusan', 'index')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/jurusan-detail/{id}', 'show')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/jurusan-add', 'create')->middleware(['auth:web,student,teacher', 'admin']);
    Route::post('/jurusan', 'store')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/jurusan-edit/{id}', 'edit')->middleware(['auth:web,student,teacher', 'admin']);
    Route::put('/jurusan/{id}', 'update')->middleware(['auth:web,student,teacher', 'admin']);
    Route::delete('/jurusan-destroy/{id}', 'destroy')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/jurusan-deleted', 'deletedJurusan')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/jurusan/{id}/restore', 'restore')->middleware(['auth:web,student,teacher', 'admin']);
});

Route::controller(ClassController::class)->group(function () {
    Route::get('/class', 'index')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/class-detail/{id}', 'show')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/class-add', 'create')->middleware(['auth:web,student,teacher', 'admin']);
    Route::post('/class', 'store')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/class-edit/{id}', 'edit')->middleware(['auth:web,student,teacher', 'admin']);
    Route::put('/class/{id}', 'update')->middleware(['auth:web,student,teacher', 'admin']);
    Route::delete('/class-destroy/{id}', 'destroy')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/class-deleted', 'deletedClass')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/class/{id}/restore', 'restore')->middleware(['auth:web,student,teacher', 'admin']);
});

Route::controller(MataPelajaranController::class)->group(function () {
    Route::get('/mapel', 'index')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/mapel-detail/{id}', 'show')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/mapel-add', 'create')->middleware(['auth:web,student,teacher', 'admin']);
    Route::post('/mapel', 'store')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/mapel-edit/{id}', 'edit')->middleware(['auth:web,student,teacher', 'admin']);
    Route::put('/mapel/{id}', 'update')->middleware(['auth:web,student,teacher', 'admin']);
    Route::delete('/mapel-destroy/{id}', 'destroy')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/mapel-deleted', 'deletedMapel')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/mapel/{id}/restore', 'restore')->middleware(['auth:web,student,teacher', 'admin']);
});

Route::controller(NilaiController::class)->group(function () {
    Route::get('/nilai', 'index')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/nilai-detail/{id}', 'show')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/nilai-add', 'create')->middleware(['auth:web,student,teacher', 'admin']);
    Route::post('/nilai', 'store')->middleware(['auth:web,student,teacher', 'admin']);
    Route::get('/nilai-edit/{id}', 'edit')->middleware(['auth:web,student,teacher', 'admin']);
    Route::post('/nilai/{id}', 'update')->middleware(['auth:web,student,teacher', 'admin']);
});


// Dashboard Student
Route::controller(StudentDashboardController::class)->group(function () {
    Route::get('/student/dashboard', 'index')->middleware(['auth:student,web,teacher', 'student']);
});


// Dashboard Taecher
Route::controller(TeacherDashboardController::class)->group(function () {
    Route::get('/teacher/dashboard', 'index')->middleware(['auth:teacher,web,student', 'teacher']);
});