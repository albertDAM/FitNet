<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Home</h1>

    @auth
        <p>Bienvenido, {{ Auth::user()->username}}</p>
    @endauth

        <a href="{{ route('macros') }}">
            Macros
        </a>
   
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">
                Cerrar sesión 
            </button>
        </form>


    
   
    
</body>
</html>