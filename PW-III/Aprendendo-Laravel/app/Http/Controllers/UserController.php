<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(Request $request){
        $informed_inputs = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if(auth('')->attempt(['name' => $informed_inputs['loginname'], 'password' => $informed_inputs['loginpassword']])){
            $request->session()->regenerate();
        }

        return session()->all();
        // return redirect('/');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function register(Request $request){
        $informed_inputs = $request->validate([
            'name' => ['required', 'min:3', 'max:16', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:72']
        ]);

        $informed_inputs['password'] = bcrypt($informed_inputs['password']);

        $user = User::create($informed_inputs);

        auth()->login($user);
        return redirect('/');
    }
}
