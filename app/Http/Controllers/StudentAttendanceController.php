<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentAttendanceController extends Controller
{
    public function attendance(Request $request)
    {
        $incomingFields = $request->validate([
            'student_id' => 'required|string',
            'student_name' => 'required|string',
            'student_email' => 'required|email',
            'password' => 'required|string',
        ]);
        $student = Student::where('student_id', $incomingFields['student_id'])
                          ->where('student_email', $incomingFields['student_email'])
                          ->first();
        if ($student && Hash::check($request->password, $student->password)) {
            auth()->login($student);
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Attendance Submitted');
        }
        return back()->withErrors(['message' => 'Invalid credentials.']);
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}


