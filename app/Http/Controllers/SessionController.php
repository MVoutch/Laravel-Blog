<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy(){
        auth()->logout();

        return redirect('/');
    }

    public function login(){
        return view('register.login');
    }

    public function session(){
        $valid = request()->validate([
            'username' => ['required', 'max:255', 'min:3'],
            'password' => ['required', 'max:255', 'min:7'],
        ]);

        if(auth()->attempt($valid)){
            session()->regenerate();

            return redirect('/');
        }

        throw ValidationException::withMessages(['username' => 'Your provided credentials could not be verified.']);
    }
}
