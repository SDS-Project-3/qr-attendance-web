<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentRegistrationController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'student_id' => 'required|string|unique:students,student_id',
            'student_name' => 'required|string',
            'student_email' => 'required|email|unique:students,student_email',
            'student_password' => 'required|string|min:8',
        ]);

        $student = Student::create([
            'student_id' => $incomingFields['student_id'],
            'student_name' => $incomingFields['student_name'],
            'student_email' => $incomingFields['student_email'],
            'student_password' => Hash::make($incomingFields['student_password']),
        ]);

        session()->flash('registered', true);
        return redirect('/home-login')->with('message', 'Registration successful! Please log in.');
    }

    // ! Error Catch: Undefined array key "password"
    public function login(Request $request){
        $credentials = $request->validate([
            'student_id' => 'required|string',
            'student_password' => 'required|string|min:8',
        ]);

// <<<<<<< att-form
//         if (auth()->attempt($credentials)) {
//             $attendances = auth()->user()->attendances; // Retrieve attendances from the database
//             return view('home-login', compact('attendances')); // Pass attendances to the view

        if (auth()->guard('student')->attempt($credentials)) {
            return redirect('/')->with('message', 'Login successful!');
        }

        return back()->withErrors([
            'student_id' => 'The provided credentials do not match our records.',
        ]);
    }
}
