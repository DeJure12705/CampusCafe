<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
 /* Define the gradient for navbar background */
#navbar {
    background: #A5773B; /* Soft gradient for a modern look */
    background-size: 400% 400%;
}

.navbar-nav .nav-link {
    color: #fff; /* White text for links */
    font-weight: 600; /* Slightly bolder text for readability */
    font-family: 'Verdana', sans-serif; /* Clean, modern font */
    padding: 10px 20px; /* Add padding for better clickable area */
}


.navbar-brand {
    color: #fff; /* White color for brand name */
    font-family: 'Georgia', serif; /* Refined serif font for café-like vibe */
    font-size: 24px; /* Larger brand name */
    font-weight: 700; /* Bold for emphasis */
}

/* Active link color */
.navbar-nav .nav-link.active {
    color: #d1b89e !important; /* Use light coffee color for active link */
}


    </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
<!-- Koan Navbar -->
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" id="navbar">
        <div class="container">
            <a class="navbar-brand text-white">
                Campus Cafe
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactP')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ordermen')}}">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutP')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ratingP')}}">Ratings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin')}}">Admin</a>
                    </li>
                    <!-- Profile Icon -->
                    <li class="nav-item ms-3">
                        <a href="profilecustomer.php" class="nav-link">
                            <i class="bi bi-person-circle" style="font-size: 1.5rem; color: green;"></i> <!-- Profile icon in green -->
                        </a>
                    </li>
                </ul>
            </div>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    

</body>


</html>
