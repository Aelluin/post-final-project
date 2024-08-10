@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-info text-black text-center rounded-top">
                    <h3 class="my-3">{{ __('Login') }}</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-info" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-info btn-lg">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background: url('https://via.placeholder.com/1920x1080') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .container-fluid {
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
        padding: 3rem;
        border-radius: 20px;
    }

    .card {
        border-radius: 15px;
        overflow: hidden;
        background: #ffffff; /* Card background color */
    }

    .card-header {
        background-color: #17a2b8; /* Info color */
        border-bottom: 2px solid #138496; /* Darker shade of info color */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-body {
        padding: 2rem;
    }

    .form-label {
        font-weight: 500;
        margin-bottom: 0.75rem;
        color: #343a40; /* Darker color for better readability */
    }

    .form-control {
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(157, 56, 56, 0.1);
        font-size: 1rem;
        padding: 0.75rem 1rem;
        transition: border-color 0.3s, box-shadow 0.3s;
        border: 1px solid #ced4da; /* Default border color */
    }

    .form-control:focus {
        border-color: #17a2b8;
        box-shadow: 0 0 0 0.2rem rgba(24, 198, 224, 0.25);
        outline: none; /* Remove default outline */
    }

    .form-control::placeholder {
        color: #6c757d;
        opacity: 1; /* Ensure placeholder text is readable */
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
        border-radius: 8px;
        padding: 0.75rem;
        font-size: 1.125rem;
        font-weight: 600;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .btn-link {
        color: #17a2b8;
        font-size: 0.875rem;
        transition: color 0.3s, text-decoration 0.3s;
    }

    .btn-link:hover {
        color: #138496;
        text-decoration: underline;
    }

    .invalid-feedback {
        font-size: 0.875rem;
        color: #dc3545;
    }
</style>
@endsection
