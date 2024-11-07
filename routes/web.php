<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAttendanceController;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LecturerRegisterController;


Route::get('/', function () {
    $attendances = session('attendances', []);
    return view('index', compact('attendances'));
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home3', function () {
    return view('home3');
})->name('home3');

Route::get('/qr-code', function () {
    return view('qr-code');
})->name('qr-code');


Route::post('/login', [StudentRegistrationController::class, 'login']);
Route::post('/register', [StudentRegistrationController::class, 'register']);

Route::post('/attendance', [StudentAttendanceController::class, 'attendance']);
Route::post('/logout', [StudentAttendanceController::class, 'logout']);
Route::get('/home3', [LecturerRegisterController::class, 'index'])->name('home3');

Route::post('/register-staff', [LecturerRegisterController::class, 'register']);
Route::post('/login-staff', [LecturerRegisterController::class, 'login']);


Route::post('/create-form', [AttendanceController::class, 'createForm']);
// Route::get('/attendance-register/{pk}', [AttendanceController::class, 'showRegistrationForm']);
Route::get('/debuggingQR', [AttendanceController::class, 'showRegistrationForm'])->name('debuggingQR');
Route::post('/register-attendance',[AttendanceController::class,'takeAttendance']);
