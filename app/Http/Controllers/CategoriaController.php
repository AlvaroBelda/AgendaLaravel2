<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::orderBy('nombre')->get();
        return view('listadoCategorias', compact('categorias'));
    }

    public function create(){

        return view('anadirCategoria');
    }

    public function store(Request $request){

        $this->validate($request, [
            'nombre' => 'required'
        ]);

        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();

        return redirect('categorias');
    }

    public function show(Categoria $categoria){

        return view('showCategoria', compact('categoria'));
    }

    public function edit(Categoria $categoria){

        return view('editarCategoria', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria){

        $this->validate($request, [
            'nombre' => 'required'
        ]);

        $categoria->nombre = $request->nombre;
        $categoria->save();
        return redirect('categorias');
    }

    public function destroy(Categoria $categoria){

        $categoria->delete();
        return redirect('categorias');
    }

}
