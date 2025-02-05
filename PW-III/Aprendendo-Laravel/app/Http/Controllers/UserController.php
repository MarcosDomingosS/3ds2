<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $informed_inputs = $request->validate([
            'name' => ['required', 'min:3', 'max:16'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:72']
        ]);

        return 'Olá';
    }
}
