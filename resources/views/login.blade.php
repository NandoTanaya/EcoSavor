@extends('layout.master')
@section('title', 'Login')
@section('content')

    <div class="login-container">
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
        <h2>Login</h2>
        <form action="{{route('login.post')}}" method="POST">
            @csrf
            <div class="input-group">
                <label for="email">email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" >
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="divider">
            <span>or continue with</span>
        </div>
        <button class="google-button">            
            <img src="img/google-G-logo.png" alt="Google logo"> 
        </button>
        <div class="link-register">
            belum punya akun?
            <a href="register">register</a>
        </div>
    </div>
@endsection