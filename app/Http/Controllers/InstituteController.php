<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function index()
    {
        $institutes = Institute::all();
        return view('institutes.index', compact('institutes'));
    }

    public function create()
    {
        return view('institutes.create');
    }

    public function store(Request $request)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $institute = Institute::create($request->all());

            $success = true;
            $mess = "El instituto <strong>" . $institute->name . "</strong> se creo exitosamente!";
        } catch (execption $e) {
            $success = false;
            $mess = "No se pudo crear el instituto! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('institutes.show', [$institute, "success" => $success, "mess" => $mess]);
    }

    public function show(Institute $institute)
    {
        return view('institutes.show', compact('institute'));
    }

    public function edit(Institute $institute)
    {
        return view('institutes.edit', compact('institute'));
    }

    public function update(Request $request, Institute $institute)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $institute->update($request->all());

            $success = true;
            $mess = "El instituto <strong>" . $institute->name . "</strong> se actualizado exitosamente!";
        } catch (execption $e) {
            $success = false;
            $mess = "No se pudieron aplicar los cambios! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('institutes.show', [$institute, "success" => $success, "mess" => $mess]);
    }

    public function destroy(Institute $institute){
        $success=$institute->delete();
        if($success){
            $mess="El instituto se ha eliminado";
        }else{

            $mess="El instituto no se ha podido eliminar";
        }
        return redirect()->route('institutes.index', [ "success" => $success, "mess" => $mess]);
    }
}
