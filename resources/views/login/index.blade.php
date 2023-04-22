@extends('layouts.master')

@section('body')
    <div id="login-form" class="login-form">
        <form action="" method="post">
            @csrf()
            <label for="email">Email :</label>
            <br>
            <input type="email" name="email" id="email">
            <br>
            @error('email')
                <p style="color: red;">{{$message}}</p>
            @enderror
            <label for="password">Password : </label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            <button id="submit" class="submit">Login</button>
        </form>
        <p>Want To Make a new account ? click <a href="{{Route("registerPage")}}">Here</a></p>
    </div>
@endsection