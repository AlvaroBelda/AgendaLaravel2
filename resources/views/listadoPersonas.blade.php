<x-layout>
    <x-menu></x-menu>
    <div style="padding-left: 2%">
        <h1>Lista personas</h1>
        <a href="{{ route('personas.create') }}">Crear persona</a>
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
                    <button><a href="{{ route('personas.show', $persona) }}">Editar</a></button>
                    <form action="{{ route('personas.destroy', $persona) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" name="eliminar" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <x-footer> </x-footer>
</x-layout>
