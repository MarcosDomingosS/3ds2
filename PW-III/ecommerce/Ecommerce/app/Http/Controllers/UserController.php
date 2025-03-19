<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function signup(Request $request){
        $informed_inputs = $request->validate([
            "signup_name"=> "required",
            "signup_email" => "required",
            "signup_password" => "required",
        ]);

        $user = User::create([
            "name"=> $informed_inputs["signup_name"],
            "email" => $informed_inputs["signup_email"],
            "password"=> bcrypt($informed_inputs["signup_password"]),
        ]);

        Auth::login($user);

        return redirect("/");
    }

    public function login(Request $request){
        if(Auth::attempt(["email"=> $request["login_email"],"password"=> $request["login_password"]])){
            $request->session()->regenerate();
        };

        return redirect("/");
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }


}
