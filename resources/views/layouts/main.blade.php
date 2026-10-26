<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'AgriVision Garut')</title>
    <link rel="stylesheet" href="{{ asset('css/agrivision.css') }}">
</head>
<body>
    <header class="topbar">
        <a href="{{ route('home') }}" class="brand">
            <span class="brand-icon">🌱</span>
            <span>AgriVision <small>Kabupaten Garut</small></span>
        </a>

        @include('partials.navbar')
    </header>

    <main class="page">
        @yield('content')
    </main>

    <footer class="footer">
        © 2026 AgriVision – Kelompok Tani Makmur Kabupaten Garut
    </footer>
</body>
</html>
