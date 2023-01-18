<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto web</title>
    {{-- vita  --}}
	@vite(['resources/css/app.css', 'resources/js/app.js'])


    {{-- agregar la ruta --}}
    {{-- <link rel="stylesheet" href="{{ asset('resources/js/app.js') }}"> --}}
</head>
<body>
	
        <div class="container px-4 mx-auto">
            <header class="flex justify-between items-center py-4">
                <div class="flex items-center flex-grow gap-4">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('imagenes/logo.png') }}" class="h-12">
                    </a>
                    {{-- Buscador --}}
                    <form action="{{ route('home') }}" class="flex-grow" method="GET">
                        <input type="text" name="search" placeholder="Buscar" value="{{ request('search') }}" 
                        class="border border-gray-200 rounded py-2 px-4 w-1/2"
                        >
                </div>

                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}">Login</a>
                   
                @endauth
            </header>  
            
            {{-- linea --}}
            <div class="opacity-60 h-px mb-8" style="
			background: linear-gradient(to right, 
				rgba(200, 200, 200, 0) 0%,
				rgba(200, 200, 200, 1) 30%,
				rgba(200, 200, 200, 1) 70%,
				rgba(200, 200, 200, 0) 100%
			);
		">

		</div>
	

            <hr>

            @yield('content')

            <p class="py-16">
                
                <img src="{{ asset('imagenes/logo.png') }}" class="h-12 mx-auto">
            </p>
        </div>   
</body>
</html>