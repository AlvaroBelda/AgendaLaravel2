<x-layout>
    <x-menu></x-menu>
    <h2>Crear categoría</h2>
    <a href="/listadoCategorias">Volver al listado categorías</a>
    <form action="/categoria" method="post" style="margin-top:1%;">
        <input  type="text"   name="nombre" placeholder="Introduce la categoría"><br><br>
        <button type="submit" class="btn btn-secondary">Añadir categoría</button>
    </form>
    <x-footer> </x-footer>
</x-layout>
