<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        @vite('resources/css/app.css')
        <title>Mujeres del bienestar</title>
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1>Mujeres del bienestar</h1>
                @guest
                    <nav>
                        <a href="">Iniciar sesión</a>
                    </nav>
                @endguest
            </div>
        </header>

        <main class="flex justify-center items-center mt-10">
            @yield('contenido')
        </main>

        <footer class="p-5 bg-white border-b shadow mt-10">
            MujeresBienestar - Todos los Derechos Reservados {{ now()->year }}
        </footer>
    </body>
</html>
