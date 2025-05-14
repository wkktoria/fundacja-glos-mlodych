<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Praktyk| Administracja</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/css/stylesheet.css', 'resources/js/script.js'])
    @endif
</head>

<body class="h-screen flex flex-col justify-between">
    <header class="flex justify-between items-center p-2 bg-black text-white">
        <h1 class="text-2xl mx-2">
            <a href="{{ route('admin.dashboard') }}">Panel Administracyjny</a>
        </h1>
        <div class="text-center flex justify-center items-center gap-2">
            <h2 class="text-lg">Witaj, <span class="font-semibold">{{ auth()->user()->name }}</span>!</h2>
            <form method=" POST" action="{{ route('admin.logout') }}">
                @csrf
                <input type="submit" value="Wyloguj" class="m-2 p-2 bg-slate-700 hover:bg-slate-800 rounded-md cursor-pointer" />
            </form>
        </div>
    </header>
    <main class="">
        <h2 class="text-4xl text-center">Lista Praktyk (oferta)</h2>
        <div class="m-4 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Nazwa</th>
                        <th scope="col" class="px-6 py-3">Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($internships as $internship)
                    <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $internship->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $internship->nazwa }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium bg-yellow-500 text-white p-2 rounded-sm inline-block m-2">Edytuj</a>
                            <a href="#" class="font-medium bg-red-500 text-white p-2 rounded-sm inline-block m-2">Usuń</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2 mx-6 bg-white">
                {{ $internships->links('pagination.custom') }}
            </div>
        </div>
    </main>
    <footer class="p-2 bg-gray-100 text-center">
        <p class="text-gray-400">Copyright © 2025 Fundacja na rzecz promocji i rozwoju – Głos Młodych</p>
    </footer>
</body>

</html>