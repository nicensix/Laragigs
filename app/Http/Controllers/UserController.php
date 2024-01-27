<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Create a new User/Validate
    public function store(Request $request) {
       
        $formFields = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string', 'email','max:255', 'unique:users'],
            'password' => ['required','string','min:8', 'confirmed'],
        ]);

        // Hash Passward
        $formFields['password'] =bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login User
        auth()->login($user);

        return redirect('/') -> with('message', 'User created and logged in successfully');
    }
    
}
