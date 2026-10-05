@extends('layout.layout')

@section('content')

    <!-- SECCIÓN 1: INICIO / HERO -->
    <section id="inicio" class="relative bg-slate-900 text-white min-h-[85vh] flex items-center justify-center text-center px-4 overflow-hidden">
        <div class="absolute inset-0 opacity-30 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1600&q=80');"></div>
        <div class="relative z-10 max-w-4xl mx-auto py-24">
            <span class="inline-block bg-red-600 text-white text-xs font-bold uppercase tracking-widest px-3 py-1 rounded mb-4">Garantía por escrito</span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-6 leading-tight">
                Reparación de Equipos en Línea Blanca
            </h1>
            <p class="text-lg md:text-xl text-slate-200 mb-8 max-w-2xl mx-auto font-normal">
                Somos expertos en reparar toda clase de equipos en línea blanca de todas las marcas del mercado con servicio el mismo día.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contacto" class="bg-red-600 hover:bg-red-700 text-white text-base font-bold px-8 py-3.5 rounded-md shadow-lg transition-all">
                    COTIZAR SERVICIO
                </a>
                <a href="#equipos" class="bg-white/10 hover:bg-white/20 text-white border border-white/30 text-base font-semibold px-8 py-3.5 rounded-md backdrop-blur-sm transition-all">
                    Ver Equipos
                </a>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 2: EQUIPOS QUE REPARAMOS -->
    <section id="equipos" class="py-24 px-4 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Equipos Que Reparamos</h2>
            <div class="w-20 h-1 bg-red-600 mx-auto mb-4"></div>
            <p class="text-slate-600 max-w-2xl mx-auto text-base">
                Damos solución a los problemas más comunes e incluso más difíciles que pueden presentar tus electrodomésticos.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-red-100 text-red-600 rounded-lg flex items-center justify-center font-bold text-xl mb-4">L</div>
                <h3 class="text-xl font-bold mb-2 text-slate-800">Lavadoras</h3>
                <p class="text-sm text-slate-600">Mantenimiento preventivo, corrección de ruidos, fugas de agua y falla de tarjeta electrónica.</p>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-red-100 text-red-600 rounded-lg flex items-center justify-center font-bold text-xl mb-4">R</div>
                <h3 class="text-xl font-bold mb-2 text-slate-800">Refrigeradores</h3>
                <p class="text-sm text-slate-600">Carga de gas refrigerante, cambio de motor/compresor y reparación de congelamiento excesivo.</p>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-red-100 text-red-600 rounded-lg flex items-center justify-center font-bold text-xl mb-4">S</div>
                <h3 class="text-xl font-bold mb-2 text-slate-800">Secadoras</h3>
                <p class="text-sm text-slate-600">Reparación de calentamiento a gas y eléctrico, cambio de bandas y sensores de temperatura.</p>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-red-100 text-red-600 rounded-lg flex items-center justify-center font-bold text-xl mb-4">V</div>
                <h3 class="text-xl font-bold mb-2 text-slate-800">Lavavajillas</h3>
                <p class="text-sm text-slate-600">Mantenimiento de bombas de drenaje, desobstrucción de aspersores y cambio de empaques.</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 3: POR QUÉ CONTRATARNOS -->
    <section id="por-que-nosotros" class="py-24 bg-slate-100 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-4">¿Por Qué Contratarnos?</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                    <h3 class="font-bold text-lg mb-2">Técnicos Certificados</h3>
                    <p class="text-sm text-slate-600">Personal altamente capacitado en las principales marcas del mercado.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                    <h3 class="font-bold text-lg mb-2">Atención Inmediata</h3>
                    <p class="text-sm text-slate-600">Visitas a domicilio el mismo día de tu llamada o mensaje.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                    <h3 class="font-bold text-lg mb-2">Refacciones Originales</h3>
                    <p class="text-sm text-slate-600">Utilizamos repuestos 100% originales para garantizar durabilidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 4: NOSOTROS -->
    <section id="nosotros" class="py-24 px-4 max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Nosotros</h2>
        <div class="w-20 h-1 bg-red-600 mx-auto mb-6"></div>
        <p class="text-slate-600 max-w-3xl mx-auto text-base leading-relaxed">
            Contamos con más de 10 años de experiencia brindando servicios de reparación, mantenimiento preventivo y correctivo para electrodomésticos y equipos de línea blanca.
        </p>
    </section>

    <!-- SECCIÓN 5: RESEÑA -->
    <section id="reseña" class="py-24 bg-slate-100 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Reseña de Nuestros Clientes</h2>
            <div class="w-20 h-1 bg-red-600 mx-auto mb-12"></div>
            <div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-sm italic text-slate-700">
                "Excelente servicio, repararon mi refrigerador el mismo día que llamé y me dieron garantía por escrito. Totalmente recomendados."
                <div class="mt-4 font-bold not-italic text-slate-900 text-sm">— Cliente Satisfecho</div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 6: CONTACTO -->
    <section id="contacto" class="py-24 px-4 max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Contacto</h2>
        <div class="w-20 h-1 bg-red-600 mx-auto mb-6"></div>
        <p class="text-slate-600 mb-8">Escríbenos o llámanos para programar una visita técnica a tu domicilio.</p>
        <a href="https://wa.me/1234567890" target="_blank" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-900 text-white font-bold text-lg px-8 py-4 rounded-full shadow-lg transition-all">
            <span>Enviar WhatsApp</span>
        </a>
    </section>

@endsection