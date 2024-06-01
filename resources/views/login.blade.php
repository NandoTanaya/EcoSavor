@extends('layout.master')
@section('title', 'Login')
@section('content')

    <div class="login-container">
        <h2>Login</h2>
        <form action="/login" method="post">
            <div class="input-group">
                <label for="email">email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="divider">
            <span>or continue with</span>
        </div>
        <button class="google-button">            
            <img src="img/google-G-logo.png" alt="Google logo"> 
        </button>
    </div>



@endsection