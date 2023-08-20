<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if(!empty(Auth::check())){
            return redirect()->route('dashboard.home');
        }
        return view('auth.login');
    }
    public function AuthLogin(LoginRequest $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.home');
        }

        // If authentication fails, redirect back with errors
        return redirect()->route('login')->withErrors([
            'email' => 'Invalid email or password',
        ]);
    }
    public function logout(){
        auth()->logout();
        return redirect('login');
    }
}
