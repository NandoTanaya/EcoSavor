@extends('layout.master')
@section('title', 'Register')
@section('content')

    <div class="register-container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            
            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
        <h2>Register</h2>
        <form action="{{route('register.post')}}" method="POST">
            @csrf
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="password_confirmation">
            </div>
            <button type="submit" class="register-button">Register</button>
        </form>
        <div class="divider">
            <span>or continue with</span>
        </div>
        <button class="google-button">
            <img src="img/google-G-logo.png" alt="Google logo">
        </button>
        <div class="link-login">
            sudah punya akun?
            <a href="login">login</a>
        </div>
    </div>

@endsection