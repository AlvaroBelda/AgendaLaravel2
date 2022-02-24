<x-layout>
    <x-menu></x-menu>
    <h1>Lista personas</h1>
    <a href="/persona">Crear persona</a>
    <table>
        <th>Estrella</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Teléfono</th>
        <th>Categoría</th>
        <th></th>
        @foreach ($personas as $persona)
        <tr>
            <td>{{$persona->estrella}}</td>
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->apellido}}</td>
            <td>{{$persona->telefono}}</td>
            <td>{{$persona->categoria->nombre}}</td>
            <td>
                <button><a href="/persona/{{$persona->id}}">Editar</a></button>
                <form action="/persona/{{$persona->id}}" method="post">
                    @method('DELETE')
                    <input type="hidden"  name="id" value="{{$persona->id}}">
                    <button type="submit" name="eliminar">Eliminar</button>
                    {{ csrf_field() }}
                </form>
            </td>
        </tr>
        @endforeach
        </table>
    <x-footer> </x-footer>
</x-layout>
