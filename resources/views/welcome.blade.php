<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Docentes.Education - Innovación Pedagógica</title>
    
    <!-- Fonts -->
    <linkpreconnect href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|playfair-display:700&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    <!-- Al tener Breeze instalado, esto cargará tu Tailwind configurado -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-slate-50 text-slate-700 font-sans">

    <!-- Navbar Minimalista -->
    <nav class="w-full bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-2">
                    <!-- Icono Libro/Tech -->
                    <div class="bg-indigo-600 text-white p-1.5 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <span class="font-bold text-xl tracking-tight text-slate-900">docentes<span class="text-indigo-600">.education</span></span>
                </div>
                
                <!-- Login Link (Si Breeze está instalado, aprovechamos las rutas) -->
                @if (Route::has('login'))
                    <div class="hidden sm:flex items-center gap-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-slate-600 hover:text-indigo-600">Panel de Control</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-600 hover:text-indigo-600">Acceso Docente</a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-[80vh]">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-80 bg-slate-900"></span>
            </div>
            
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-8/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-serif font-bold text-5xl sm:text-6xl drop-shadow-lg">
                                Tecnología al servicio de la pedagogía
                            </h1>
                            <p class="mt-6 text-lg sm:text-xl text-slate-200 leading-relaxed font-light">
                                Bienvenidos al portal de referencia para el uso de recursos tecnológicos en el aula. 
                                Un espacio dedicado a la formación, información y herramientas para el docente del futuro.
                            </p>
                            
                            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="#proposito" class="px-8 py-3 rounded-md bg-indigo-600 text-white font-semibold hover:bg-indigo-500 transition shadow-lg hover:shadow-indigo-500/30">
                                    Conoce el proyecto
                                </a>
                                <div class="px-8 py-3 rounded-md border border-slate-400 text-slate-200 font-medium cursor-default">
                                    Próximamente
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Propósito -->
        <section id="proposito" class="pb-20 bg-slate-50 -mt-24 relative z-10">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center">
                    
                    <!-- Card 1 -->
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg transform transition hover:-translate-y-1 duration-300">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                                </div>
                                <h6 class="text-xl font-bold text-slate-800">Recursos Didácticos</h6>
                                <p class="mt-2 mb-4 text-slate-500">
                                    Curación de contenidos y herramientas digitales probadas en entornos reales, clasificadas por nivel educativo y materia.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg transform transition hover:-translate-y-1 duration-300">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-indigo-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <h6 class="text-xl font-bold text-slate-800">Competencia Digital</h6>
                                <p class="mt-2 mb-4 text-slate-500">
                                    Artículos y guías sobre metodologías activas apoyadas en tecnología, IA generativa en el aula y seguridad digital.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg transform transition hover:-translate-y-1 duration-300">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                </div>
                                <h6 class="text-xl font-bold text-slate-800">Comunidad Docente</h6>
                                <p class="mt-2 mb-4 text-slate-500">
                                    Un punto de encuentro para compartir experiencias, dudas y éxitos en la implementación de nuevas tecnologías educativas.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="relative bg-slate-800 pt-8 pb-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-slate-400 font-semibold py-1">
                        Copyright © {{ date('Y') }} Docentes Education.
                        <br>
                        <span class="text-xs font-normal">Desarrollado con Laravel 12 & Tailwind CSS.</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>