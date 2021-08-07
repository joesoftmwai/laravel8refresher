<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->email);

        $this->validate($request, [
            "name" => "required|max:200",
            "username" => "required|min:4",
            "email" => "required|email|max:200",
            "password" => "required|confirmed",
            "name" => "required | max:200",
        ]);

        // validate user

        // store user

        // sign in user

        // redirect
    }
}
