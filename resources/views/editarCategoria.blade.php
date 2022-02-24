<x-layout>
    <x-menu></x-menu>
    <h2>Editar categoría</h2>
    <a href="/listadoCategorias">Volver al listado categorías</a>
    <form action="/categoria/{{$categoria->id}}" method="post" style="margin-top:1%;">
        @method('PUT')
        <input  type="hidden"   name="id"      value="{{$categoria->id}}">
        <input  type="text"     name="nombre"  value="{{$categoria->nombre}}"><br><br>
        <button type="submit"   name="modificar">Editar categoría</button>
        {{ csrf_field() }}
    </form>
    <x-footer> </x-footer>
</x-layout>
