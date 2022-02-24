<x-layout>
    <x-menu></x-menu>
    <div style="padding-left: 2%">
        <h2>Crear categoría</h2>
        <a href="{{route('categorias.index')}}">Volver al listado categorías</a>
        <form action="{{ route('categorias.store') }}" method="post" style="margin-top:1%;">
            @csrf
            <input  type="text"   name="nombre" placeholder="Introduce la categoría"><br><br>
            <button type="submit" class="btn btn-secondary">Añadir categoría</button>
        </form>
    </div>
    <x-footer> </x-footer>
</x-layout>
