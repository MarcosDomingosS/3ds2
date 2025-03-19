<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(["prefix"=> "user", "as" => "user."], function () {
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::post('/signup', [UserController::class,'signup'])->name('signup');
    Route::get("/logout", [UserController::class,"logout"])->name("logout");
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    if(Auth::check()) {
        return redirect('/');
    }
    return view('login');
});

Route::get('/signup', function () {
    if(Auth::check()) {
        return redirect('/');
    }
    return view('signup');
});