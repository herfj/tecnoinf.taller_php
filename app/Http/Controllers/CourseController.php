<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Institute;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    public function show(Course $course){
        $institutes = Institute::all();
        return view('courses.show',compact('course',), compact('institutes'));
    }

    public function create()
    {
        $institutes = Institute::all();
        return view('courses.create', compact('institutes'));
    }

    public function store(Request $request)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration_in_weeks' => 'required',
            'hours' => 'required',
            'institute_id' => 'required',
            'credits' => 'required'
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $course = Course::create($request->all());


            $success = true;
            $mess = "El Curso <strong>" . $course->name . "</strong> se creo exitosamente!";
        } catch (execption $e) {
            $success = false;
            $mess = "No se pudo crear el curso! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('courses.show', [$course, "success" => $success, "mess" => $mess]);
    }

    public function edit(Course $course)
    {
        $institutes = Institute::all();
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration_in_weeks' => 'required',
            'hours' => 'required',
            'credits' => 'required'
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $course->update($request->all());

            $success = true;
            $mess = "El curso <strong>" . $course->name . "</strong> se actualizado exitosamente!";
        } catch (execption $e) {
            $success = false;
            $mess = "No se pudieron aplicar los cambios! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('courses.show', [$course, "success" => $success, "mess" => $mess]);
    }

    public function destroy(Course $course){
        $success=$course->delete();
        if($success){
            $mess="El curso se ha eliminado";
        }else{

            $mess="El curso no se ha podido eliminar";
        }
        return redirect()->route('courses.index', [ "success" => $success, "mess" => $mess]);
    }

}
