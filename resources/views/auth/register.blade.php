@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f9fa; /* Light background color for the entire page */
    }

    .container {
        margin-top: 50px;
    }

    .card {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Stronger shadow for more depth */
        border-radius: 10px;
        border: none;
        background-color: #ffffff; /* White background for the card */
    }

    .card-header {
        background-color: #007bff; /* Blue background for the header */
        color: white;
        font-size: 1.75rem; /* Larger font size */
        text-align: center;
        border-bottom: none;
        border-radius: 10px 10px 0 0; /* Rounded top corners */
        padding: 20px; /* More padding for a spacious feel */
    }

    .card-body {
        padding: 2.5rem; /* Increased padding for a cleaner layout */
    }

    .form-control {
        border-radius: 8px;
        box-shadow: none;
        border-color: #ced4da;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.25); /* Enhanced focus shadow */
    }

    .btn-info {
        background-color: #17a2b8; /* Light blue button color */
        border-color: #17a2b8;
        border-radius: 8px;
        padding: 12px 25px; /* Larger padding for the button */
        font-size: 1rem; /* Standard font size for buttons */
        transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for button effects */
    }

    .btn-info:hover {
        background-color: #138496; /* Darker blue on hover */
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.2); /* Shadow on hover */
    }

    .invalid-feedback {
        color: #e3342f;
        font-size: 0.875rem;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
