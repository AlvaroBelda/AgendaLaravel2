<x-layout>
    <x-menu></x-menu>
    <div style="padding-left: 2%">
        <h2>Editar categoría</h2>
        <a href="{{ route('categorias.index') }}">Volver al listado categorías</a>
        <form action="{{ route('categorias.update', $categoria) }}" method="post" style="margin-top:1%;">
            @method('PUT')
            @csrf
            <input  type="text"     name="nombre"  value="{{$categoria->nombre}}"><br><br>
            <button type="submit"   name="modificar" class="btn btn-secondary">Editar categoría</button>
        </form>
    </div>
    <x-footer> </x-footer>
</x-layout>
