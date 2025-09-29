<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.css')
</head>
<body class="bg-gray-700 text-gray-100 font-sans">
    <div class="min-h-screen flex flex-col">
        <header class="bg-gradient-to-r from-purple-700 to-indigo-700 shadow-lg">
            <div class="container mx-auto flex items-center justify-between px-6 py-4">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-14 h-14 rounded-lg shadow-md">
                    <h1 class="text-2xl md:text-3xl font-extrabold tracking-wide">
                        Food Menu
                    </h1>
                </div>
            </div>
        </header>

        <main class="flex-1 container mx-auto px-6 py-4">
            @if(session('success'))
                <div class="mb-4 p-4 rounded-lg bg-green-500/20 text-green-200 border border-green-400">
                    ✅ {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>

        <footer class="bg-gray-800 text-gray-400 py-4 text-center text-sm">
            © {{ date('Y') }} My Mini Project - ariefmb. All rights reserved.
        </footer>
    </div>
</body>
</html>
