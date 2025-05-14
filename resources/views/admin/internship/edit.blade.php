<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj Praktykę | Administracja</title>
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
        <h2 class="my-4 text-4xl">Edytuj Praktykę</h2>
        @if($errors->any())
        <div class="p-2 m-4 border border-red-500 bg-red-400 text-white font-semibold rounded-xl shadow-xl text-center">
            <p class="font-bold">Wystąpiły błędy:</p>
            <ul class="mx-4 list-disc">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('admin.internships.update', $internship->id) }}" enctype="multipart/form-data" class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow-md space-y-4">
            @csrf
            @method('PUT')
            <div class="my-2">
                <label for="nazwa" class="block text-sm font-medium text-gray-700 mb-1">Nazwa:</label>
                <input id="nazwa" name="nazwa" type="text" value="{{ old('nazwa', $internship->nazwa) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-600" />
            </div>
            <div class="my-2">
                <label for="opis" class="block text-sm font-medium text-gray-700 mb-1">Opis:</label>
                <input id="opis" name="opis" type="text" value="{{ old('opis', $internship->opis) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-600" />
            </div>
            <div class="my-2">
                <label for="obowiązki" class="block text-sm font-medium text-gray-700 mb-1">Obowiązki:</label>
                <textarea rows="4" id="obowiązki" name="obowiązki" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-600">{{ old('obowiązki', $internship->obowiązki) }}</textarea>
            </div>
            <div class="my-2">
                <label for="narzędzia" class="block text-sm font-medium text-gray-700 mb-1">Narzędzia:</label>
                <textarea rows="4" id="narzędzia" name="narzędzia" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-600">{{ old('narzędzia', $internship->narzędzia) }}</textarea>
            </div>
            <div class="my-2">
                <label for="obraz" class="block text-sm font-medium text-gray-700 mb-1">Obraz:</label>
                <input id="obraz" name="obraz" type="file" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-600" />
                <span class="text-gray-300">Maksymalna wielkość pliku: 2MB</span>
                @if($internship->obraz)
                <img src="{{ Storage::url($internship->obraz) }}" alt="Image" class="my-4 border border-gray-300 rounded-sm shadow-sm" />
                @endif
            </div>
            <div class="text-center">
                <button type="submit" class="my-2 bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700 transition cursor-pointer">Zapisz</button>
            </div>
        </form>
    </main>
    <footer class="p-2 bg-gray-100 text-center">
        <p class="text-gray-400">Copyright © 2025 Fundacja na rzecz promocji i rozwoju – Głos Młodych</p>
    </footer>
</body>

</html>