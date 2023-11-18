<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>
    </head> 
    
    

    <header class="p-5 boder-b shadow bg-white">
        <h1 class="text-4xl font-bold text-indigo-400 ">
            CRUD
        </h1>
        <div class="text-right">
            <a class="font-bold text-indigo-400 mx-5" href="{{route('register')}}">REGISTRAR</a>
            <a class="font-bold text-indigo-400 mx-5" href="{{route('listar')}}">LISTAR USUARIOS</a>
        </div>
        
    </header>
    <body class="bg-gray-100">
       <hr>
       <h1>@yield('titulo')</h1>
       <hr>
       <h1>@yield('contenido')</h1>
    </body>

    <footer>
        <h3 class="text-center font-black p-5 text-indigo-400 font-bold uppercase">{{ date('Y:HH')}} 
        </h3>
       </footer>
</html>
