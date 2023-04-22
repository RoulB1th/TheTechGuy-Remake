@extends('layouts.master')

@section('body')
    <hr style="margin: 10px 5px">
    <main id="main" class="main">
        <div id="welcome" class="welcome">
            <h1 id="welcome-text" class="welcome-text">Welcome <span>{{$user}}</span></h1>
            <h3>Check Out All These Posts</h3>
        </div>
    </main>
@endsection