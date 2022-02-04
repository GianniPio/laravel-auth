@extends('layouts.main')

@section('content')



    @guest
    
    <hr class="border-white">

    <h1>Register</h1>

    <form action="{{route('register')}}" method="POST">


    @method('POST')
    @csrf

        <label for="name">Name</label>
        <input type="text" name="name"><br>
        <label for="email">Email</label>
        <input type="text" name="email"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <label for="password_confirmation">Password Confirmed</label>
        <input type="password" name="password_confirmation"><br>
        <input type="submit" value="Register">
    
    </form>

    <hr class="border-white">

    <h1>Login</h1>

    <form action="{{route('login')}}" method="POST">

        @method('POST')
        @csrf

        
        <label for="email">Email</label>
        <input type="text" name="email"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
        
    </form>
    
    <hr class="border-white">
    @endguest
    

    


@endsection