@extends('layouts.auth')

@section('content')
<!-- Bootstrap 5 CSS (Add in the <head> section of your layout) -->
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom cafe theme styles */
        body {
            background-color: #f8f2e7; /* Light beige background */
            font-family: 'Arial', sans-serif;
        }

        .card {
            background-color: #fffaf0; /* Soft cafe background */
            border-radius: 15px;
            border: 2px solid #d4c2a1; /* Warm brown border */
        }

        .card-header {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: #6b4f4f; /* Deep coffee color */
            background-color: #f5e6da; /* Light coffee-colored background */
            border-bottom: 3px solid #c3a489; /* Coffee border */
            padding: 1.5rem;
        }

        .card-body {
            padding: 2rem;
        }

        .btn-primary {
            background-color: #6b4f4f; /* Dark coffee color */
            color: #f5e6da; /* Light cream text */
            border-radius: 8px;
            font-weight: bold;
            padding: 10px 20px;
            font-size: 1rem;
        }

        .form-label {
            color: #6b4f4f; /* Dark coffee color */
            font-weight: bold;
        }

        .form-control {
            border-radius: 8px;
            background-color: #fffaf0; /* Light beige */
            border: 1px solid #c3a489; /* Coffee color */
            padding: 10px;
        }

        .form-check-input {
            border-radius: 4px;
            border: 1px solid #c3a489; /* Coffee color */
            background-color: #fffaf0; /* Light beige */
        }

        .form-check-label {
            color: #6b4f4f; /* Dark coffee color */
        }

        .btn-link {
            color: #6b4f4f;
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
</head>

<div class="container py-5 d-flex justify-content-center align-items-center" 
     style="min-height: 100vh;">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg">
            <!-- Header -->
            <div class="card-header text-center">
                ☕ {{ __('Welcome to Our Cafe') }}
            </div>

            <!-- Body -->
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name Input -->
                    <div class="form-group mb-4">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name" type="text" 
                               class="form-control @error('name') is-invalid @enderror" 
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Email Input -->
                    <div class="form-group mb-4">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" 
                               class="form-control @error('email') is-invalid @enderror" 
                               name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="form-group mb-4">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" 
                               class="form-control @error('password') is-invalid @enderror" 
                               name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group mb-4">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" 
                               class="form-control" 
                               name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
