<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- vue --}}
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FreeAppzz</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="180x180" href="/assets-icon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets-icon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    {{-- <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}"> --}}
    <!-- Scripts -->
@vite(['resources/css/app.css'], ['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="font-sans antialiased max-h-screen">
    <div  style="background-color: #eec0c6;
    background-image: linear-gradient(315deg, #eec0c6 0%, #7ee8fa 74%);
    
">

        {{-- {{ url('/images/logo.svg') }} --}}
        <div class="fixed w-full z-10">
        @include('layouts.navigation')
    </div>
        <main class="flex-grow z-20 py-10 px-20">
            {{ $slot }}
        </main>
        {{-- <x-messages /> --}}
    </div>
</body>



</html>
