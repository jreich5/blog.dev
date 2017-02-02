@extends('layouts.master')

@section('title')
Register
@stop

@section('content')

    <h1>Sign Up</h1>

    {{-- <form>
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">User name</label>
            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>


        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password Confirmation</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-success">Register</button>
    </form> --}}

    <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>


@stop
