<x-layout>
    <x-menu></x-menu>
    <div style="padding-left: 2%">
        <h2>Información categoría</h2>
        <a href="{{ route('categorias.index') }}">Volver al listado categorías</a><br><br>

        <label>Nombre categoría:</label>
        <p>{{$categoria->nombre}}</p><br>

        <a href="{{ route('categorias.edit', $categoria) }}">Editarla</a>
    </div>
    <x-footer> </x-footer>
</x-layout>
