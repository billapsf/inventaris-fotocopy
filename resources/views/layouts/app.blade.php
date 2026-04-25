<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'INVENTARIS')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    @auth
        <nav class="navbar">
            <div class="navbar-inner">
                <div class="nav-left">
                    <div class="brand">FOTOCOPY PRIMA</div>
                    <div class="nav-links">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                        <a href="{{ route('kategori.index') }}">Kategori</a>
                        <a href="{{ route('barang.index') }}">Data Barang</a>
                    </div>
                </div>
                <div class="nav-right">
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    @endauth

    @yield('content')
</body>
</html>
