@extends('layouts.master')

@section('title')
Home
@stop

@section('content')

    <h1 class="jumbotron text-center moveDown">Welcome to this test blog!</h1>

    <div>
        <h3><a href="post/1">Post Title</a></h3>
        <h5>Date Posted</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
        <h5><a href="/user-profile/1">Post Author</a></h5>
        <hr>

    </div>
       
@stop
