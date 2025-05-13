<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administracyjny | Administracja</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/css/stylesheet.css', 'resources/js/script.js'])
    @endif
</head>

<body class="h-screen flex flex-col justify-between">
    <header class="flex justify-between items-center p-2 bg-black text-white">
        <h1 class="text-2xl mx-2">Panel Administracyjny</h1>
        <div class="text-center flex justify-center items-center gap-2">
            <h2 class="text-lg">Witaj, <span class="font-semibold">{{ auth()->user()->name }}</span>!</h2>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <input type="submit" value="Wyloguj" class="m-2 p-2 bg-slate-700 hover:bg-slate-800 rounded-md cursor-pointer" />
            </form>
        </div>
    </header>
    <main class="flex flex-col sm:flex-row justify-center items-center">
        <section class="w-100 p-2 m-4 flex flex-col justify-center items-center gap-2 border-2 border-gray-500 bg-gray-700 text-white rounded-2xl shadow-xl">
            <h2 class="text-2xl">Posty</h2>
            <p class="text-xl">Ilość postów: <span class="font-semibold">{{ $posts->count() }}</span></p>
            <div class="w-full my-3 flex justify-around items-center">
                <a href="#" class="p-2 bg-gray-500 hover:bg-gray-400 hover:font-semibold rounded-sm">Dodaj post</a>
                <a href="#" class="p-2 bg-gray-500 hover:bg-gray-400 hover:font-semibold rounded-sm">Lista postów</a>
            </div>
        </section>
        <section class="w-100 p-2 m-4 flex flex-col justify-center items-center gap-2 border-2 border-sky-400 bg-sky-600 text-white rounded-2xl shadow-xl">
            <h2 class="text-2xl">Praktyki (oferta)</h2>
            <p class="text-xl">Ilość praktyk: <span class="font-semibold">{{ $internships->count() }}</span></p>
            <div class="w-full my-3 flex justify-around items-center">
                <a href="#" class="p-2 bg-sky-400 hover:bg-sky-300 hover:font-semibold rounded-sm">Dodaj praktykę</a>
                <a href="#" class="p-2 bg-sky-400 hover:bg-sky-300 hover:font-semibold rounded-sm">Lista praktyk</a>
            </div>
        </section>
    </main>
    <footer class="p-2 bg-gray-100 text-center">
        <p class="text-gray-400">Copyright © 2025 Fundacja na rzecz promocji i rozwoju – Głos Młodych</p>
    </footer>
</body>

</html>