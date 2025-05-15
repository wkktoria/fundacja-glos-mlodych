<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Administracja</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/css/stylesheet.css', 'resources/js/script.js'])
    @endif
</head>

<body class="h-screen flex flex-col justify-between">
    <header class="flex justify-between items-center p-2 bg-black text-white">
        <h1 class="text-2xl mx-2"><a href="{{ route('admin.dashboard') }}">Panel Administracyjny</a></h1>
        <div class="text-center flex justify-center items-center gap-2">
            <h2 class="text-lg">Witaj, <span class="font-semibold">{{ auth()->user()->name }}</span>!</h2>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <input type="submit" value="Wyloguj" class="m-2 p-2 bg-slate-700 hover:bg-slate-800 rounded-md cursor-pointer" />
            </form>
        </div>
    </header>
    <main class="flex flex-col justify-center items-center">
        @yield('content')

    </main>
    <footer class="p-2 bg-gray-100 text-center">
        <p class="text-gray-400">Copyright © 2025 Fundacja na rzecz promocji i rozwoju – Głos Młodych</p>
    </footer>
</body>

</html>