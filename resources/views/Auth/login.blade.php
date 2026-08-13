@extends('layout.app')

@section('title', 'Admin Login')

@section('main')

<div class="login-page">

    <div class="login-card">

        {{-- Logo --}}
        <div class="login-logo">
            <span>MI</span>
        </div>

        {{-- Heading --}}
        <div class="login-header">
            <h1>Welcome Back</h1>
            <p>Login to access your admin dashboard</p>
        </div>

        {{-- Error Messages --}}
        @if ($errors->any())
        <div class="login-error">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- Login Form --}}
        <form method="POST" action="{{ route('login') }}">

            @csrf

            {{-- Email --}}
            <div class="form-group">

                <label for="email">
                    Email Address
                </label>

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email"
                    required autofocus>

                @error('email')
                <span class="field-error">
                    {{ $message }}
                </span>
                @enderror

            </div>


            {{-- Password --}}
            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                @error('password')
                <span class="field-error">
                    {{ $message }}
                </span>
                @enderror

            </div>


            {{-- Remember Me --}}
            <div class="login-options">

                <label class="remember">
                    <input type="checkbox" name="remember">

                    <span>Remember me</span>
                </label>


                @if (Route::has('password.request'))

                <a href="{{ route('password.request') }}">
                    Forgot password?
                </a>

                @endif

            </div>


            {{-- Login Button --}}
            <button type="submit" class="login-button">
                Login
            </button>

        </form>


        {{-- Back to Portfolio --}}
        <div class="back-link">

            <a href="{{ url('/') }}">
                ← Back to Portfolio
            </a>

        </div>

    </div>

</div>

@endsection