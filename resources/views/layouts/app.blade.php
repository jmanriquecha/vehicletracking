<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <title>@yield('title', 'FleetTrack')</title>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Sidebar --}}
    @include('partials.sidebar')

    {{-- Contenido principal --}}
    <main class="app-main">

        <div class="app-content-header">
            @include('partials.container')
        </div>

        <div class="app-content">
            <div class="container-fluid">
                {{-- Alertas --}}
                @include('partials.alerts')

                {{-- Contenido específico de cada página --}}
                @yield('content')

            </div>
        </div>

    </main>

    {{-- Footer --}}
    @include('partials.footer')

</div>

@stack('scripts')

</body>
</html>