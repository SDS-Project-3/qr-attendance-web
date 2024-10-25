<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\AttendanceReference;
use App\Models\Student;

class AttendanceController extends Controller
{
    private function toHex($value)
    {
        return strtoupper(bin2hex($value)); // Convert string to hex and return uppercase
    }

    public function createForm(Request $request){
        $incomingFields = $request->validate([
            'module-major' => ["required"],
            'module-num' => ["required"],
            'module-period' => ["required"],
            'module-date' => ["required"],
        ]);

        $moduleCode = $incomingFields['module-major']."-".$incomingFields['module-num'];
        $hexReference = $this->toHex("{$incomingFields['module-date']}, {$incomingFields['module-period']}, {$moduleCode}");

        $attendanceReference = AttendanceReference::create([
            'hexa_reference' => $hexReference,
            'module_code' => $moduleCode,
            'module_date' => $incomingFields['module-date'],
            'period' => $incomingFields['module-period'],
        ]);
        
    }

    public function showRegistrationForm(Request $request){
        $pk = $request->input('pk');
        return view('attendanceForm', compact('pk'));
    }

    public function takeAttendance(Request $request){
        $incomingFields = $request->validate([
            'hex_ref' => ["required"],
            'full_name' => ["required"],
            'student_id' => ["required"],
            'student_email' => ["required"],
            'password'=> ["required"],
        ]);
        // TODO: Create verification that student exist in database
        $student = Student::where('email', $incomingFields['student_email'])->first();
        if (!$student || !Hash::check($incomingFields['password'], $student->password)) {
            return redirect()->back()->withErrors(['error' => 'Invalid email or password']);
        }
        
        $hexRef = $request->input('hex_ref');

        // Manual check ID
        $lastEntry = Attendance::where('hex_ref', $incomingFields['hex_ref'])->orderBy('id', 'desc')->first();
        $newId = $lastEntry ? $lastEntry->id + 1 : 1;


        Attendance::create([
            'hex_ref' => $hexRef,
            'id' => $newId,
            'student_id' => $incomingFields['student_id'],
            'full_name' => $incomingFields['full_name'],
        ]);
    }
}
