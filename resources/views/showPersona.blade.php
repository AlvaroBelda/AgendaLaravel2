<x-layout>
    <x-menu></x-menu>
    <div style="padding-left: 2%">
        <h2>Información persona</h2>
        <a href="{{ route('personas.index') }}">Volver al listado categorías</a><br><br>

        <label>Estrella:</label>
        <p>{{$persona->estrella}}</p><br>
        <label>Nombre:</label>
        <p>{{$persona->nombre}}</p><br>
        <label>Apellido:</label>
        <p>{{$persona->apellido}}</p><br>
        <label>Telefono:</label>
        <p>{{$persona->telefono}}</p><br>
        <label>Categoria:</label>
        <p>{{$persona->categoria->nombre}}</p><br>

        <a href="{{ route('personas.edit', $persona) }}">Editarla</a>
    </div>
    <x-footer> </x-footer>
</x-layout>
