<x-layout>
    <x-menu></x-menu>
    <h1>Lista categorías</h1>
    <a href="/categoria">Crear nueva categoría</a>
    <table>
        <th>Nombre</th>
        <th></th>

        @foreach ($categorias as $categoria)
        <tr>
            <td><a href="/categoria/{{$categoria->id}}">{{$categoria->nombre}}</a></td>
            <td>
                <form method="post" action="/categoria/{{$categoria->id}}">
                    @method('DELETE')
                    <input type="hidden" name="id"          value="{{$categoria->id}}">
                    <input type="submit" name="eliminar"    value="Eliminar">
                    {{ csrf_field() }}
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <x-footer> </x-footer>
</x-layout>
