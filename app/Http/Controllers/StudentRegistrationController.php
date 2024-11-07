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
            'password' => 'required|string|min:8',
        ]);

        $student = Student::create([
            'student_id' => $incomingFields['student_id'],
            'student_name' => $incomingFields['student_name'],
            'student_email' => $incomingFields['student_email'],
            'password' => Hash::make($incomingFields['password']),
        ]);
        auth()->login($student);
        session()->flash('registered', true);
        return redirect('/home')->with('message', 'Registration successful!');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'student_id' => 'required|string',
            'password' => 'required|string',
        ]);

        if (auth()->attempt($credentials)) {
            $attendances = auth()->user()->attendances; // Retrieve attendances from the database
            return view('home-login', compact('attendances')); // Pass attendances to the view
        }

        return back()->withErrors([
            'student_id' => 'The provided credentials do not match our records.',
        ]);
    }
}
