<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LecturerRegisterController extends Controller
{
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'lecturer_name' => ['required', 'min:3', 'max:10', Rule::unique('lecturers', 'lecturer_name')],
            'lecturer_email' => ['required', 'email', Rule::unique('lecturers', 'lecturer_email')],
            'lecturer_password' => ['required', 'min:8', 'max:200'],
        ]);

        $incomingFields['lecturer_password'] = bcrypt($incomingFields['lecturer_password']);
        $user = Lecturer::create($incomingFields);
        auth()->login($user);
        return redirect('/qr-gen');
    }

    public function login(Request $request){
        // \Log::info('Login Attempt Data: ', $request->all());

        $incomingFields = $request->validate([
            'lecturer_name'=>'required',
            'lecturer_password'=>'required',
        ]);

        // ! Error: Undefined array key "password"
        // if (auth()->guard('lecturer')->attempt([
        //     'lecturer_name' => $incomingFields['lecturer_name'], 
        //     'lecturer_password' => $incomingFields['lecturer_password']
        // ])) {
        //         $request->session()->regenerate();
        //     }
            
        return redirect('/qr-gen');
    }

    public function logout(){
        auth()->logout();
        return redirect ('/home3');
    }


    public function index()
    {
        return view('home3'); // Return a view named 'home3'
    }
}
