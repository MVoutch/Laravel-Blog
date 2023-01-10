<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function reg() {
        return view('register.create');
    }

    public function store() {
        $valid = User::create(request()->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'max:255', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'max:255', 'min:7'],
        ]));

        auth()->login($valid);

        return redirect('/')->with('success', 'Ur account was successfully created');
    }
}
