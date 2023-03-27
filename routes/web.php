<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
})->middleware('auth');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'authenticating')->middleware('guest');
    Route::get('/logout', 'logout')->middleware(['auth']);
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/student', 'index')->middleware('auth');
    Route::get('/student-detail/{id}', 'show')->middleware('auth');
    Route::get('/student-add', 'create')->middleware('auth');
    Route::post('/student', 'store')->middleware('auth');
    Route::get('/student-edit/{id}', 'edit')->middleware('auth');
    Route::put('/student/{id}', 'update')->middleware('auth');
    Route::delete('/student-destroy/{id}', 'destroy')->middleware('auth');
    Route::get('/student-deleted', 'deletedStudent')->middleware('auth');
    Route::get('/student/{id}/restore', 'restore')->middleware('auth');
});

Route::controller(TeacherController::class)->group(function () {
    Route::get('/teacher', 'index')->middleware('auth');
    Route::get('/teacher-detail/{id}', 'show')->middleware('auth');
    Route::get('/teacher-add', 'create')->middleware('auth');
    Route::post('/teacher', 'store')->middleware('auth');
    Route::get('/teacher-edit/{id}', 'edit')->middleware('auth');
    Route::put('/teacher/{id}', 'update')->middleware('auth');
    Route::delete('/teacher-destroy/{id}', 'destroy')->middleware('auth');
    Route::get('/teacher-deleted', 'deletedTeacher')->middleware('auth');
    Route::get('/teacher/{id}/restore', 'restore')->middleware('auth');
});

Route::controller(JurusanController::class)->group(function () {
    Route::get('/jurusan', 'index')->middleware('auth');
    Route::get('/jurusan-detail/{id}', 'show')->middleware('auth');
    Route::get('/jurusan-add', 'create')->middleware('auth');
    Route::post('/jurusan', 'store')->middleware('auth');
    Route::get('/jurusan-edit/{id}', 'edit')->middleware('auth');
    Route::put('/jurusan/{id}', 'update')->middleware('auth');
    Route::delete('/jurusan-destroy/{id}', 'destroy')->middleware('auth');
    Route::get('/jurusan-deleted', 'deletedJurusan')->middleware('auth');
    Route::get('/jurusan/{id}/restore', 'restore')->middleware('auth');
});

Route::controller(ClassController::class)->group(function () {
    Route::get('/class', 'index')->middleware('auth');
    Route::get('/class-detail/{id}', 'show')->middleware('auth');
    Route::get('/class-add', 'create')->middleware('auth');
    Route::post('/class', 'store')->middleware('auth');
    Route::get('/class-edit/{id}', 'edit')->middleware('auth');
    Route::put('/class/{id}', 'update')->middleware('auth');
    Route::delete('/class-destroy/{id}', 'destroy')->middleware('auth');
    Route::get('/class-deleted', 'deletedClass')->middleware('auth');
    Route::get('/class/{id}/restore', 'restore')->middleware('auth');
});

Route::controller(MataPelajaranController::class)->group(function () {
    Route::get('/mapel', 'index')->middleware('auth');
    Route::get('/mapel-detail/{id}', 'show')->middleware('auth');
    Route::get('/mapel-add', 'create')->middleware('auth');
    Route::post('/mapel', 'store')->middleware('auth');
    Route::get('/mapel-edit/{id}', 'edit')->middleware('auth');
    Route::put('/mapel/{id}', 'update')->middleware('auth');
    Route::delete('/mapel-destroy/{id}', 'destroy')->middleware('auth');
    Route::get('/mapel-deleted', 'deletedMapel')->middleware('auth');
    Route::get('/mapel/{id}/restore', 'restore')->middleware('auth');
});

Route::controller(NilaiController::class)->group(function () {
    Route::get('/nilai', 'index')->middleware('auth');
    Route::get('/nilai-detail/{id}', 'show')->middleware('auth');
    Route::get('/nilai-add', 'create')->middleware('auth');
    Route::post('/nilai', 'store')->middleware('auth');

    Route::get('/nilai-edit/{id}', 'edit')->middleware('auth');
    Route::post('/nilai/{id}', 'update')->middleware('auth');
});