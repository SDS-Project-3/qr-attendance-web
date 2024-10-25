<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAttendanceController;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\AttendanceController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('qr-gen');
});


Route::post('/login', [StudentRegistrationController::class, 'login']);
Route::post('/register', [StudentRegistrationController::class, 'register']);
Route::post('/attendance', [StudentAttendanceController::class, 'attendance']);
Route::post('/logout', [StudentAttendanceController::class, 'logout']);

Route::post('/create-form', [AttendanceController::class, 'createForm']);
// Route::get('/attendance-register/{pk}', [AttendanceController::class, 'showRegistrationForm']);
Route::get('/debuggingQR', [AttendanceController::class, 'showRegistrationForm'])->name('debuggingQR');
Route::post('/register-attendance',[AttendanceController::class,'takeAttendance']);
