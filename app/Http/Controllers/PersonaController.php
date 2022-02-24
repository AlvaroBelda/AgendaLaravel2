<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Categoria;

class PersonaController extends Controller
{
    public function listadoPersonas(){

        $personas = Persona::all();
        return view('/listadoPersonas', compact('personas'));
    }

    public function anadir(){
        $categorias = Categoria::all();
        $personas = Persona::all();
        return view('/anadirPersona', compact('categorias', 'personas'));
    }

    public function crear(Request $request){

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
        return redirect('listadoPersonas');
    }

    public function editar(Persona $persona)
    {
        $categorias = Categoria::all();
        $personas   = Persona::all();
        return view('editarPersona', compact('persona', 'categorias', 'personas'));
    }

    public function eliminar(Persona $persona)
    {
        $persona->delete();
        return redirect('/listadoPersonas');
    }

    public function modificar(Request $request, Persona $persona)
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
        return redirect('/listadoPersonas');
    }
}
