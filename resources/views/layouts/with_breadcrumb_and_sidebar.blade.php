<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/css/stylesheet.css', 'resources/js/script.js'])
    @endif
</head>

<body>
    @include('includes.header')
    @include('includes.nav')
    @include('includes.breadcrumb', array('pages' => $pages))
    <div class="w-[95%] mx-auto flex flex-col lg:flex-row">
        @include('includes.sidebar')
        <main class="w-full lg:w-[80%]">
            @yield('content')
        </main>
    </div>
    @include('includes.footer')
</body>

</html>