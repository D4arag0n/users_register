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
                <a href="{{route('afiliado.inicio')}}"><h1>Mujeres del bienestar</h1></a>
                @guest
                    <nav>
                        <a href="{{route('login.iniciar')}}">Iniciar sesión</a>
                    </nav>
                @endguest
                @auth
                <nav>
                    <a href="#">Perfil</a>
                </nav>
                
                @endauth
            </div>
        </header>
        @guest
            <main class="flex justify-center items-center mt-10">
                @yield('contenido')
            </main>
        @endguest

        @auth
        <main class="flex">
            <div class="flex flex-col h-screen w-64 bg-gray-800 text-white shadow-lg">
                <nav class="flex-grow">
                    <ul class="mt-4 space-y-2">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-700">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-700">
                                Sustentantes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-700">
                                Usuarios
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-700">
                                Configuración
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-700">
                                Reportes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-700">
                                Soporte
                            </a>
                        </li>
                    </ul>
                    <div class="p-4 border-t border-gray-600">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" class="block px-4 py-2 text-center text-sm hover:bg-gray-700">
                                Cerrar Sesión
                            </button>
                        </form>
                        
                    </div>
                </nav>
                
            </div>
            <div>
                @yield('contenido')
            </div>
        </main>
        @endauth
        

        <footer class="p-5 bg-white border-b shadow mt-10 fixed bottom-0 left-0 w-full">
            MujeresBienestar - Todos los Derechos Reservados {{ now()->year }}
        </footer>
    </body>
</html>
