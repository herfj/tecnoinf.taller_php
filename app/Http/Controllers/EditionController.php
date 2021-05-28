<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Course_Category;
use App\Models\Institute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Edition;
use App\Models\User;

class EditionController extends Controller
{
    public function create(Course $course)
    {

        return view('editions.create', compact('course'));
    }

    public function store(Request $request)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'space_available' => 'required',
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $edition = Edition::create($request->all());
            $success = true;
            $mess = "La Edicion <strong>" . $edition->name . "</strong> se creo exitosamente!";
        } catch (exception $e) {
            $success = false;
            $mess = "No se pudo crear el curso! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('editions.show', [$edition, "success" => $success, "mess" => $mess]);
    }

    public function show(Edition $edition){

        $teacher = User::all();
        return view('editions.show',compact('edition','teacher'));
    }

    public function edit(Edition $edition)
    {
        return view('editions.edit', compact('edition'));
    }

    public function update(Request $request, Edition $edition)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'space_available' => 'required',
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $edition->update($request->all());
            $success = true;
            $mess = "La edicion <strong>" . $edition->name . "</strong> se actualizado exitosamente!";
        } catch (execption $e) {
            $success = false;
            $mess = "No se pudieron aplicar los cambios! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('courses.show', [$edition, "success" => $success, "mess" => $mess]);
    }

    public function destroy(Edition $edition){
        $success=$edition->delete();
        if($success){
            $mess="El curso se ha eliminado";
        }else{

            $mess="El curso no se ha podido eliminar";
        }
        return redirect()->route('courses.index', [ "success" => $success, "mess" => $mess]);
    }

}
