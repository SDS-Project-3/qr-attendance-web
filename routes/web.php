<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAttendanceController;
use App\Http\Controllers\StudentRegistrationController;

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


Route::post('/login', [StudentRegistrationController::class, 'login']);
Route::post('/register', [StudentRegistrationController::class, 'register']);
Route::post('/attendance', [StudentAttendanceController::class, 'attendance']);
Route::post('/logout', [StudentAttendanceController::class, 'logout']);
