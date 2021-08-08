<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // dd('login --- success');

        // validate user
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required",

        ]);



        if (!Auth::attempt($request->only('email', 'password'), $request->rememebr)) {
            return back()->with('status', 'Invalid email or passwrod');
        }


        // redirect
        return redirect()->route('dashboard');
    }
}
