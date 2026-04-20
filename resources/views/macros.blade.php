@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macros</title>
</head>
<body>
    <form action="{{ route('guardardatos') }}" method="POST">
        @csrf
        Introduce tu peso:
        <input type="peso" name="peso">
        Introduce tu altura (en cm):
        <input type="altura" name="altura">
        Introduce tu edad:
        <input type="edad" name="edad">
    
        
    
    
        <label for="opcion">Selecciona tu sexo:</label>
        <select name="sexo" id="opcion" class="form-control">
            <option value="hombre">Homnre</option>
            <option value="mujer">Mujer</option>
        </select>

       


        <label for="opcionact">Selecciona tu actividad:</label>
        <select name="actividad" id="opcionact" class="form-control">
            <option value="sedentario">Sedentario</option>
            <option value="ligero">Ligero</option>
            <option value="moderado">Moderado</option>
            <option value="fuerte">Fuerte</option>
            <option value="muyfuerte">Muy fuerte</option>
        </select>

        <label for="opcionobj">Selecciona tu objetivo:</label>
        <select name="objetivo" id="opcionobj" class="form-control">
            <option value="perder">Perder Grasa</option>
            <option value="ganar">Ganar Músculo</option>
            <option value="mantenimiento">Mantenimiento</option>
        </select>

        <button type="submit">Enviar</button>

        
    </form>

        @if(session('sexo'))
         <div class="alert alert-success">
             El resultado del cálculo es: {{ session('sexo') }}
        </div>
        @endif


        @isset($tmb)
        <p> $ {{ number_format($tmb)}} </p>
        @else
        <p> cargando calculo </p>
        @endisset
</body>
</html>