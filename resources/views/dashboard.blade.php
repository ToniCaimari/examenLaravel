<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <nav>POSTS crear publicació</nav>
    <form action="posts/create" method="get">
        <label for="titulo">Título de la publicación:</label><br>
        <input type="text" id="titulo" name="titulo"><br>
        <label for="extracto">Extracto publicación:</label><br>
        <input type="text" id="extracto" name="extracto">
        <br>
        <label for="contenido">Contenido publicación:</label><br>
        <textarea id="contenido" name="contenido"></textarea><br>
        <input type="checkbox" id="caducable" name="caducable" value="1">
        <label for="caducable"> Caducable</label><br>
        <input type="checkbox" id="comentable" name="comentable" value="1">
        <label for="comentable">Comentable</label><br>
    </form>
            </div>
        </div>
    </div>
</x-app-layout>
