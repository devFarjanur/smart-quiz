<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Teacher\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teacher-login', [AuthenticatedSessionController::class, 'teacherLogin'])->name('teacher.login');

Route::get('/teacher-dashboard', [TeacherController::class, 'teacherDashboard'])->name('teacher.dashboard');



require __DIR__ . '/auth.php';
