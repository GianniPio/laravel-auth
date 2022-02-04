@extends('layouts.main')

@section('content')
    <h1>Register</h1>

    <form>

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

    <form>

        
        <label for="email">Email</label>
        <input type="text" name="email"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
        
        </form>


@endsection