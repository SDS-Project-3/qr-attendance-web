<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    $normalizedStudentId = strtoupper($incomingFields['student_id']);
    $normalizedStudentEmail = strtolower($incomingFields['student_email']);
    $normalizedStudentName = ucwords(strtolower($incomingFields['student_name']));

    $student = Student::where('student_id', $normalizedStudentId)
                      ->where('student_email', $normalizedStudentEmail)
                      ->first();
    if (!$student) {
        return back()->withErrors(['message' => 'Student not found.']);
    }
    if (!Hash::check($request->password, $student->password)) {
        return back()->withErrors(['message' => 'Invalid password.']);
    }
    Auth::login($student);
    Attendance::create([
        'student_id' => $student->student_id,
        'student_name' => $normalizedStudentName,
        'student_email' => $normalizedStudentEmail,
        'present' => true,
    ]);
    $attendanceCount = Attendance::where('student_id', $student->id)->count();
    return redirect('/')->with(['success' => 'Attendance submitted successfully.']);
}
public function showAttendanceHistory(Request $request)
{
    // Validate the necessary fields for login
    $incomingFields = $request->validate([
        'student_id' => 'required|string',
        'student_email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Find the student using the student_id and student_email
    $student = Student::where('student_id', $incomingFields['student_id'])
                      ->where('student_email', $incomingFields['student_email'])
                      ->first();

    // Check if the student exists and if the password is correct
    if ($student && Hash::check($incomingFields['password'], $student->password)) {
        // Log the student in
        auth()->login($student);
        $request->session()->regenerate();

        // Fetch the attendance records for the logged-in student
        $attendances = Attendance::where('student_id', $student->student_id)->get();

        // Return the 'home' view with the attendance data
        return view('home', compact('attendances'))->with('message', 'Attendance Submitted');
    }

    // Return back with error message if credentials are invalid
    return back()->withErrors(['message' => 'Invalid credentials.']);
}

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
