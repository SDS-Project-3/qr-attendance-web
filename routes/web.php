<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAttendanceController;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\AttendanceController;

// Route::get('/', function () {
//     return view('home');
// });

//Route::get('/', function () {
//    $attendances = session('attendances', []);
//    return view('index', compact('attendances'));
//});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/home-login', function () {
    return view('home-login');
})->name('home-login');
//Route::get('/home-login', function () {
  //  $attendances = auth()->user()->attendances; // Retrieve attendances from the database
  //  return view('home-login', compact('attendances')); // Pass attendances to the view
//})->middleware('auth')->name('home-login');
Route::get('/', function () {
    $attendances = session('attendances', []); // Fetch all attendances or filter as needed
    return view('qr-gen', compact('attendances'));
})->name('qr-gen');

//Route::view('/', 'index')->name('index');


#Route::get('/login', [StudentRegistrationController::class, 'login'])->name('login');
Route::post('/login', [StudentRegistrationController::class, 'login']);
Route::post('/register', [StudentRegistrationController::class, 'register']);
Route::get('/register', function () {
    return view('register-account');
});
Route::post('/attendance', [StudentAttendanceController::class, 'attendance']);
Route::post('/logout', [StudentAttendanceController::class, 'logout']);

Route::post('/create-form', [AttendanceController::class, 'createForm']);
// Route::get('/attendance-register/{pk}', [AttendanceController::class, 'showRegistrationForm']);
Route::get('/debuggingQR', [AttendanceController::class, 'showRegistrationForm'])->name('debuggingQR');
Route::post('/register-attendance',[AttendanceController::class,'takeAttendance']);
