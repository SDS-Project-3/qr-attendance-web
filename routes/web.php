<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAttendanceController;
use App\Http\Controllers\StudentRegistrationController;

Route::get('/', function () {
    return view('home');
});


Route::post('/login', [StudentRegistrationController::class, 'login']);
Route::post('/register', [StudentRegistrationController::class, 'register']);
Route::post('/attendance', [StudentAttendanceController::class, 'attendance']);
Route::post('/logout', [StudentAttendanceController::class, 'logout']);
