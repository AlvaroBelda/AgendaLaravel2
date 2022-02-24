<x-layout>
    <x-menu></x-menu>
    <h2>Crear persona</h2>
    <a href="/listadoPersonas">Volver al listado personas</a>
    <form action="/persona" method="post" style="margin-top:1%;">
        <label>¿Favorito?</label>
        <input  type="checkbox" name="estrella" value="{{('checked')? '1' : '0'}}" ><br><br>
        <label>Nombre</label>
        <input  type="text" name="nombre"           placeholder="Introduce la persona"><br><br>
        <label>Apellido</label>
        <input  type="text" name="apellido"         placeholder="Introduce el apellido"><br><br>
        <label>Telefono</label>
        <input  type="text" name="telefono"         placeholder="Introduce el telefono"><br><br>
        <label>Categoria</label>
        <select name="categoria_id">
            @foreach($categorias as $categoria)
                <option value='{{$categoria->id}}'>{{$categoria->nombre}}</option>
            @endforeach
        </select><br><br>
        <button type="submit" class="btn btn-secondary">Añadir persona</button>
        {{ csrf_field() }}
    </form>
    <x-footer> </x-footer>
</x-layout>
