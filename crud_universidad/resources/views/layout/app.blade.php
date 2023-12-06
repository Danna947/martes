<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
<body>
    <header>
        <nav class="bg-sky-800">
            <div class="container mx-auto  flex justify-between items-center">
                <ul class="flex space-xl-4">
                    <li><a href="/" class="text-white p-4 ">Home</a></li>
                    <li><a href="{{ route('registrar') }}" class="text-white p-4 ">Usuario</a></li>
                    <li><a s class="text-white p-2 ">Listar</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
        <div class="text-center">
            @yield('contenido')
        </div>
    </main>
</body>
</html>
