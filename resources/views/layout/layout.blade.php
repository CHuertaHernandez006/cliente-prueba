<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Servicio Plus') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Carga de Tailwind v4 vía Vite (o CDN si Vite no está activo) -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-[#F8F9FA] text-gray-800 min-h-screen flex flex-col font-sans scroll-pt-20">

    <!-- BARRA FIJA SUPERIOR (Acompaña el scroll) -->
    <header class="fixed top-0 left-0 w-full bg-white z-50 shadow-md border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <!-- Logo estilo Servicio Plus -->
            <div class="flex items-center h-full">
                <a href="#inicio" class="h-full flex items-center bg-[#EDCC0C] px-6 text-white font-black text-xl tracking-wider transition-opacity hover:opacity-95">
                    Nombre pendiente
                </a>
            </div>

            <!-- Enlaces del Menú -->
            <nav class="hidden md:flex items-center space-x-8 text-[15px] font-semibold text-[#1D3557]">
                <a href="#inicio" class="py-1 border-b-2 border-[#1D3557] hover:border-[#1D3557] transition-all">Inicio</a>
                <a href="#equipos" class="py-1 border-b-2 border-transparent hover:border-[#1D3557] transition-all">¿Que equipos reparamos?</a>
                <a href="#por-que-nosotros" class="py-1 border-b-2 border-transparent hover:border-[#1D3557] transition-all">¿Por qué usar nuestros servicios?</a>
                <a href="#nosotros" class="py-1 border-b-2 border-transparent hover:border-[#1D3557] transition-all">Sobre nosotros</a>
                <a href="#reseña" class="py-1 border-b-2 border-transparent hover:border-[#1D3557] transition-all">Opiniones</a>
                <a href="#contacto" class="py-1 border-b-2 border-transparent hover:border-[#1D3557] transition-all">Contacto</a>
            </nav>

            <!-- Botón WhatsApp Directo -->
            <a href="https://wa.me/1234567890" target="_blank" class="hidden sm:inline-flex bg-blue-600 hover:bg-blue-900 text-white font-bold text-xs uppercase tracking-wider px-5 py-2.5 rounded-md shadow transition-all">
                Cotizar Ahora
            </a>
        </div>
    </header>

    <!-- Contenido dinámico principal -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-8 text-center text-sm border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4">
            <p>&copy; {{ date('Y') }} Nombre pendiente - Servicio Técnico Especializado en reparación de articulos electronicos.</p>
        </div>
    </footer>

</body>
</html>