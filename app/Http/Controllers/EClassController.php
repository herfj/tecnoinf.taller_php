<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\EClass;
use App\Models\Edition;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EClassController extends Controller
{

    public function create(Edition $edition)
    {
        return view('classes.create', compact('edition'));
    }

    public function store(Request $request)
    {
        //Validacion de los parametros
        $request->validate([
            'topic' => 'required',
            'class_date' => 'required',
            'class_notes' => 'required',
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $clase = EClass::create($request->all());
            $success = true;
            $mess = "La clase con el topico <strong>" . $clase->topic . "</strong> se creo exitosamente!";
        } catch (exception $e) {
            $success = false;
            $mess = "No se pudo crear la clase! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('classes.show', [$clase, "success" => $success, "mess" => $mess]);
    }

    public function show(EClass $clase){

        $editions = Edition::all();
        $teachers = User::all();
        return view('classes.show',compact('clase','editions','teachers'));
    }

    public function edit(EClass $clase)
    {
        return view('classes.edit', compact('clase'));
    }

    public function update(Request $request, EClass $clase)
    {
        //Validacion de los parametros
        $request->validate([
            'topic' => 'required',
            'class_date' => 'required',
            'class_notes' => 'required',
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $clase->update($request->all());
            $success = true;
            $mess = "La clase <strong>" . $clase->topic . "</strong> se actualizado exitosamente!";
        } catch (execption $e) {
            $success = false;
            $mess = "No se pudieron aplicar los cambios! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('classes.show', [$clase, "success" => $success, "mess" => $mess]);
    }

    public function destroy(EClass $clase){
        $success=$clase->delete();
        if($success){
            $mess="La clase se ha eliminado";
        }else{

            $mess="La clase no se ha podido eliminar";
        }
        return redirect()->route('editions.index', [ "success" => $success, "mess" => $mess]);
    }
}
