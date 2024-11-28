<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Cafe</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400p,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50 bg-cover bg-center" style="background-image: url('video/campus.jpeg');">
    <div class="relative min-h-screen">
        <!-- Content area centered vertically -->
        <div class="flex flex-1 flex-col items-center justify-center">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <!-- Your SVG logo or other content goes here -->
                <div class="flex lg:justify-center lg:col-start-2">
                    <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="..." fill="currentColor"/>
                    </svg>
                </div>

                <!-- Login and Register Links positioned top-right -->
                @if (Route::has('login'))
                    <nav class="position-absolute top-0 end-0 p-3">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-light rounded-md px-6 py-3 text-black">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-light rounded-md px-6 py-3 text-black me-2">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-light rounded-md px-6 py-3 text-black">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>
        </div>

        <!-- Footer stays at the bottom -->
        <footer class="py-4 text-center text-sm text-black dark:text-white/70 w-full">
           
        </footer>
    </div>

    <!-- Bootstrap JS (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
