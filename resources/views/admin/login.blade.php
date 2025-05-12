<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie | Administracja</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/css/stylesheet.css', 'resources/js/script.js'])
    @endif
</head>

<body>
    <main>
        <section>
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-full rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">Zaloguj się</h1>
                        @if($errors->any())
                        <ul class="list-disc py-2 px-4 text-red-500">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Adres email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5" placeholder="admin@example.com" required />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Hasło</label>
                                <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5" placeholder="••••••••" required />
                            </div>
                            <button type="submit" class="w-full text-white bg-gray-600 hover:bg-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer">Zaloguj</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>