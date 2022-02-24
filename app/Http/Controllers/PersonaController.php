<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Categoria;

class PersonaController extends Controller
{
    public function index(){

        $personas = Persona::orderBy('nombre')->get();
        return view('listadoPersonas', compact('personas'));
    }

    public function create(){
        $categorias = Categoria::all();
        $personas = Persona::all();
        return view('anadirPersona', compact('categorias', 'personas'));
    }

    public function store(Request $request){

        $valorEstrella = $request->estrella;

        if($valorEstrella == 1){
            $valorEstrella = 1;
        }else{
            $valorEstrella = 0;
        }

        $persona = new Persona();
        $persona->estrella      = $valorEstrella;
        $persona->nombre        = $request->nombre;
        $persona->apellido      = $request->apellido;
        $persona->telefono      = $request->telefono;
        $persona->categoria_id  = $request->categoria_id;
        $persona->save();
        return redirect('personas');
    }

    public function show(Persona $persona){

        return view('showPersona', compact('persona'));
    }

    public function edit(Persona $persona)
    {
        $categorias = Categoria::all();
        $personas   = Persona::all();
        return view('editarPersona', compact('persona', 'categorias', 'personas'));
    }

    public function update(Request $request, Persona $persona)
    {
        $valorEstrella = $request->estrella;

        if($valorEstrella == 1){
            $valorEstrella = 1;
        }else{
            $valorEstrella = 0;
        }

        $persona->estrella      = $valorEstrella;
        $persona->nombre        = $request->nombre;
        $persona->apellido      = $request->apellido;
        $persona->telefono      = $request->telefono;
        $persona->categoria_id  = $request->categoria_id;
        $persona->save();
        return redirect('personas');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect('personas');
    }
}
