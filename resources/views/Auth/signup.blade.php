@extends('layout.app')

@section('title', 'Register')

@section('main')

<div class="register-page">

    <div class="register-card">

        <div class="register-logo">
            <span>MI</span>
        </div>

        <div class="register-header">
            <h1>Create Account</h1>
            <p>Register to access your dashboard</p>
        </div>

        @if ($errors->any())
        <div class="register-error">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">

            @csrf

            <div class="form-group">
                <label>Name</label>

                <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label>Email Address</label>

                <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label>Password</label>

                <input type="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>

                <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
            </div>

            <button type="submit" class="register-button">
                Create Account
            </button>

        </form>

        <div class="login-link">
            Already have an account?
            <a href="/login">Login</a>
        </div>

    </div>

</div>

@endsection