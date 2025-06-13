@extends('layouts.auth')

@section('title', 'Register - ChocoLux')

@section('content')
<div class="container">
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" required>
        </div>
        <div class="form-btn">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
    <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
        body {
            background-color: #f3e5d0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: #8b5e34;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #d1a77e;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-group input {
            margin-bottom: 15px;
            border: 1px solid #a1887f;
            border-radius: 5px;
            padding: 10px;
            background-color: #faf3ef;
            color: #d1a77e;
        }

        .form-group input::placeholder {
            color: #d1a77e;
        }

        .form-btn input {
            width: 100%;
            background-color: #d1a77e;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-btn input:hover {
            background-color: #5e4333;
        }

        .alert {
            margin-bottom: 20px;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

        .alert-danger {
            background-color: #d32f2f;
        }

        .alert-success {
            background-color: #388e3c;
        }

        p a {
            color: #8d6e63;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

    </style>
@endsection
