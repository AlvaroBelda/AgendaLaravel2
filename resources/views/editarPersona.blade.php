<x-layout>
    <x-menu></x-menu>
    <h2>Editar persona</h2>
    <a href="/listadoPersonas">Volver al listado personas</a>
    <form action="/persona/{{$persona->id}}" method="post" style="margin-top:1%;">
        @method('PUT')
        <input type="hidden"    name="id"           value="{{$persona->id}}"><br>
        <label>¿Favorito?</label>
        <input  type="checkbox" name="estrella"     value="{{('checked')? '1' : '0'}}" {{($persona->estrella == 1)? 'checked' : ''}}><br><br>
        <label>Nombre</label>
        <input type="text"      name="nombre"       value="{{$persona->nombre}}"><br><br>
        <label>Apellido</label>
        <input type="text"      name="apellido"     value="{{$persona->apellido}}"><br><br>
        <label>Telefono</label>
        <input type="text"      name="telefono"     value="{{$persona->telefono}}"><br><br>
        <label>Categoría</label>
        <select name="categoria_id">
            @foreach($categorias as $categoria)
                <option value='{{$categoria->id}}' {{$persona->categoria->id == $categoria->id ? 'selected' : ''}}>{{$categoria->nombre}}</option>
            @endforeach
        </select><br><br>
        <button type="submit"   name="editar">Editar persona</button>
        {{ csrf_field() }}
    </form>
    <x-footer> </x-footer>
</x-layout>
