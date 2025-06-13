@extends('layouts.auth')

@section('title', 'Login - ChocoLux')

@section('content')
<div class="wrapper">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h1>Login</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="input-box">
            <input type="text" name="email" placeholder="Email"
                   value="{{ old('email') }}" required>
            <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
            <input type="password" name="password"
                   placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>

        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="btn btn-success form-control mt-3">
            Login
        </button>

        <div class="register-link">
            <p>Don't have an account?
               <a href="{{ route('register') }}">Register</a>
            </p>
        </div>

        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
    </form>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection
