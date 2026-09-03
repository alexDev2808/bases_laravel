<nav class="w-full bg-gray-800 p-4 text-white ">
    <ul class="flex justify-evenly"> 
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('posts.index') }}">{{ $titulo }}</a></li>
        <li><a href="{{ route('areas.index') }}">Departamentos</a></li>
    </ul>

</nav>