<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function listadoCategorias(){

        $categorias = Categoria::all();
        return view('listadoCategorias', compact('categorias'));
    }

    public function anadir(){

        return view('/anadirCategoria');
    }

    public function crear(Request $request){

        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();

        return redirect('listadoCategorias');
    }

    public function editar(Categoria $categoria)
    {

        return view('editarCategoria', compact('categoria'));
    }

    public function eliminar(Categoria $categoria)
    {
        $categoria->delete();
        return redirect('/listadoCategorias');
    }

    public function modificar(Request $request, Categoria $categoria)
    {

        $categoria->nombre = $request->nombre;
        $categoria->save();
        return redirect('/listadoCategorias');
    }
}
