<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <p>Etiqueta: {{ $etiqueta }}</p>
    {!! $etiquetaHTML !!} <!-- Esto renderiza el HTML sin escapar, ten cuidado con esto para evitar vulnerabilidades XSS -->

    @if (true)
        <p>Este mensaje se mostrara si es true</p>
    @else
        <p>Este mensaje se mostrara si es false</p>
    @endif

    @unless (false)
        <p>Solo es un valor false "unless"</p>
    @endunless

    @isset($titulo)
        <h2>{{ $titulo }}</h2>
    @else
        <h2>No hay título</h2>
    @endisset

    @empty($posts)
        <p>No hay posts disponibles</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>{{ $post['titulo'] }}: {{ $post['contenido'] }}</li>
            @endforeach
        </ul>
    @endempty

    @env('local')
        <p>Estamos en desarrollo local</p>
    @endenv

    @production
        <p>Estamos en Productivo</p>
    @endproduction
    
    <script>
        let posts = @json($posts); // Esto convierte la variable PHP $posts en un objeto JavaScript
        console.log(posts);
    </script>
</body>
</html>