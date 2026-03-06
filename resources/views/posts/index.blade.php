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
    
    <script>
        let posts = @json($posts); // Esto convierte la variable PHP $posts en un objeto JavaScript
        console.log(posts);
    </script>
</body>
</html>