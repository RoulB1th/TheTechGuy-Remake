@extends('layouts.master')

@section('body')
    <div id="register-form" class="register-form">
        <form action="{{Route("newRegister")}}" method="post">
            @csrf
            <label for="email">Email :</label>
            <br>
            <input type="email" name="email" id="email">
            <br>
            @error('email')
                <p style="color: red;">{{$message}}</p>
            @enderror
            <label for="username">Username</label>
            <br>
            <input type="text" name="username" id="username">
            <br>
            @error('username')
                <p style="color: red;">{{$message}}</p>
            @enderror
            <label for="gender">Gender :</label>
            <select id="gender" name="gender">
                <option value="none" selected>I Prefer Not To Say</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            <br>
            @error('gender')
                <p style="color: red;">{{$message}}</p>
            @enderror
            <label for="password">Password : </label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            @error('password')
                <p style="color: red;">{{$message}}</p>
            @enderror
            <label for="rpassword">Repeat Password : </label>
            <br>
            <input type="password" name="password_confirmation" id="rpassword">
            <br>
            @error('repeat password')
                <p style="color: red;">{{$message}}</p>
            @enderror
            <button id="submit" class="submit">Register</button>
        </form>
        <p>Want To Log in with an existing account ? click <a href="{{Route("loginPage")}}">Here</a></p>
    </div>
@endsection