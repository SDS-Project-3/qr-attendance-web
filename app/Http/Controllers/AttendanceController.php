<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\AttendanceReference;

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

    public function showRegistrationForm($pk){
        return view('attendanceRegistration', compact('pk'));
    }
}
