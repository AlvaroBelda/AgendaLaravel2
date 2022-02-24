<x-layout>
    <x-menu></x-menu>
    <div style="padding-left: 2%">
        <h1>Lista categorías</h1>
        <a href="{{ route('categorias.create') }}">Crear nueva categoría</a>
        <table>
            <th>Nombre</th>
            <th></th>

            @foreach ($categorias as $categoria)
            <tr>
                <td><a href="{{ route('categorias.show', $categoria) }}">{{$categoria->nombre}}</a></td>
                <td>
                    <form method="post" action="{{ route('categorias.destroy', $categoria) }}">
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
