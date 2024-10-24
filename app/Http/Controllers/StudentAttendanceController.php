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
    public function showAttendanceHistory()
    {
        $student = Auth::user()?->student_id;
        $attendances = Attendance::where('student_id', $student)->get();
        return view('home', compact('attendances'));
    }
    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
