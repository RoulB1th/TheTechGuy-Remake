<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public static function index()
    {
        return view("register/index");
    }

    public static function register(Request $request)
    {
        $request->validate([
            "email"=>"email|min:4|max:55|unique:users|required",
            "username"=>"min:4|max:25|alpha_num|required",
            "gender"=>"required",
            "password"=>"min:6|max:55|required|confirmed",
            "password_confirmation"=>"required|min:6"
        ]);

        $hashed_password = Hash::make($request->password);
        $bio = "None";

        $newUser = User::create([
            'name'=>$request->username,
            'email'=>$request->email,
            'gender'=>$request->gender ?? "N/A",
            'password'=>$hashed_password,
            'bio'=>$bio
        ]);

        $newUser->save();

        Auth::login($newUser);

        return redirect('/')->with('message','Successfully Logged In 🐘');

    }
}
