<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public static function index()
    {
        return view("login/index");
    }
    public static function login(Request $request)
    {
        $request->validate([
            "email"=>"email|required",
            "password"=>"required"
        ]);

        if(auth()->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            $request->session()->regenerate();
            return redirect('/')->with("message","Successfully Logged In 🐘");
        }
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput("email");
    }
}
