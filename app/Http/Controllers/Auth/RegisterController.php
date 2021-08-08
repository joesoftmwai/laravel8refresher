<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->email);

        // validate user
        $this->validate($request, [
            "name" => "required|max:200",
            "username" => "required|min:4",
            "email" => "required|email|max:200",
            "password" => "required",
        ]);

        // store user
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // sign in user

        // auth()->attempt(['email' => $request->email, 'password' => $request->password]);
        // auth()->attempt($request->only('email', 'password'));
        Auth::attempt($request->only('email', 'password'));

        // redirect
        return redirect()->route('dashboard');
    }
}
