<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginname'=>'required',
            'loginpassword'=>'required',
        ]);
        

        //if (auth()->attempt(['name'=>$incomingFields['loginname'], 'password'=>$incomingFields['loginpassword']])){

            //$request->session()->regenerate();

            
        //}
        return redirect('/qr-code');
        
    }

    public function logout(){
        auth()->logout();
        return redirect ('/home3');
    }

    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:200'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/home3');
    }

    public function index()
    {
        return view('home3'); // Return a view named 'home3'
    }
}
