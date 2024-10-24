<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function recordAttendance(Request $request){
        $incomingFields = $request -> validate([
            // TODO: Validations
        ]);


    }
}
