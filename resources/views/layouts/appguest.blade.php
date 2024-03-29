<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ route('admin.dashboard') }}"
                        class="text-sm text-gray-100 dark:text-gray-300 font-bold">Painel</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-100 dark:text-gray-300 font-bold">Log in</a>

                    {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif --}}
                @endauth
            </div>
        @endif
        @include('layouts.navguest')

        <!-- Page Heading -->
        <header class="bg-mybiblio-blue-600 min-h-[200px] rounded-b-xl -m-2">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{-- @section('sidebar')
            This is the master sidebar.
        @show --}}
                @yield('header')
            </div>
        </header>

        <!-- Page Content -->
        <main class="-mt-[155px]">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/nice-select.js') }}" defer></script>
    <script src="{{ asset('js/cadastro_livro.js') }}" defer></script>
    {{-- <script>
        $(document).ready(function() {
            $('select').niceSelect();
        });
    </script> --}}

</body>

</html>
