<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

    <style>
        .color-red {
            color: red;
        }

        .color-green {
            color: green;
        }

    </style>
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
                <li><b @class(['color-red' => $loop->first, 'color-green' => $loop->last])>{{ $post['titulo'] }}</b>: {{ $post['contenido'] }}</li>
            @endforeach
        </ul>
    @endempty

    @forelse ($images as $image)
        <div>
            <img src="{{ $image['url'] }}" alt="Imagen {{ $image['id'] }}">
        </div>
        
    @empty
        <p>No hay imágenes disponibles</p>
    @endforelse

    @switch($dia)
        @case(1)
            <p>Hoy es lunes</p>
            @break
        @case(2)
            <p>Hoy es martes</p>
            @break
    
        @default
            <p>Hoy no es ni lunes ni martes</p>
            
    @endswitch

    @env('local')
        <p>Estamos en desarrollo local</p>
    @endenv

    @production
        <p>Estamos en Productivo</p>
    @endproduction

    <ul>
        @for ($i = 1; $i < 5; $i++)
            <li>
                Índice: 
                @for ($j = 1; $j <= $i; $j++)
                    *
                @endfor
            </li>
        @endfor
    </ul>

    @php
        $i = 0;
    @endphp
    @while ($i <= 15)
        @break($i == 13)
        @php
            $i++;
        @endphp
        @continue($i % 2 != 0)
        <p>{{ $i }} es par</p>
        
        
    @endwhile
    <div>
    @foreach ($posts as $post)
       <div>
            <h2> 
                {{ $loop->iteration }} -> {{ $post['titulo'] }}
                @if( $loop->first ) (Primer post) @endif
                @if( $loop->last ) (Ultimo post) @endif
            </h2>
            <p>{{ $post['contenido'] }}</p>
            <ul>
                @foreach ($post['tags'] as $tag)
                    <li>
                        {{ $tag }}
                        @if($loop->parent->first)
                            "Tag del primer post"
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
    </div>
    
    <script>
        let posts = @json($posts); // Esto convierte la variable PHP $posts en un objeto JavaScript
        console.log(posts);
    </script>
</body>
</html>