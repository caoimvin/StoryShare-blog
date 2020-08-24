@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to StoryShare!</h1>
        <p>Share your stories and pictures along with other people on this <a href="/posts">beautiful blog</a>.</p>
        <img class="intro-image" src="img/intro_image.svg" alt="">
        @if(Auth::guest())
        <p class="intro-login"><a class="login btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="register btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endif
    </div>
@endsection
    