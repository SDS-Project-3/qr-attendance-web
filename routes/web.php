<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAttendanceController;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('home');
// });

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


Route::post('/login', [StudentRegistrationController::class, 'login']);
Route::post('/register', [StudentRegistrationController::class, 'register']);
Route::post('/attendance', [StudentAttendanceController::class, 'attendance']);
Route::post('/logout', [StudentAttendanceController::class, 'logout']);
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [RegisterController::class, 'logout']);
Route::post('/login', [RegisterController::class, 'login']);
Route::get('/home3', [RegisterController::class, 'index'])->name('home3');
Route::get('/register', [RegisterController::class, 'register']);


Route::post('/create-form', [AttendanceController::class, 'createForm']);
// Route::get('/attendance-register/{pk}', [AttendanceController::class, 'showRegistrationForm']);
Route::get('/debuggingQR', [AttendanceController::class, 'showRegistrationForm'])->name('debuggingQR');
Route::post('/register-attendance',[AttendanceController::class,'takeAttendance']);
