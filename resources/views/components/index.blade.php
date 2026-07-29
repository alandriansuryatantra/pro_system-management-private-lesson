<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/55e67d8f28.js" crossorigin="anonymous"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        @inlude('components.style')
    @endif
</head>

<body class="">

    <body>
        @include('components.navbar')
        @include('components.sidebar')
        <div class="p-4 sm:ml-64 mt-14">
            @yield('content')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    </body>

</body>

</html>
