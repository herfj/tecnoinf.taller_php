<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Course_Category;
use App\Models\Institute;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Edition;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function show(Course $course){
        $institutes = Institute::all();
        $cur_cat = Course_Category::all();
        $categories = Category::all();
        $editions = Edition::all();
        return view('courses.show',compact('course', 'institutes', 'cur_cat', 'categories','editions'));
    }

    public function create()
    {
        $categories = Category::all();
        $institutes = Institute::all();
        return view('courses.create', compact('institutes','categories'));
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
            $cats = $request->cat;
            if ($cats!=null) {
                foreach ($cats as $cat) {

                    $cur_cat[$cat] = new Course_Category();
                    $cur_cat[$cat]->course_id = $course->id;
                    $cur_cat[$cat]->category_id = $cat;
                    $cur_cat[$cat]->save();
                }
            }
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
        $categorias = Category::all();
        $institutes = Institute::all();
        $cur_cat = Course_Category::all();
        return view('courses.edit', compact('course', 'categorias', 'institutes', 'cur_cat'));
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
            $cats = $request->cat;
            $borrac = $request->borracat;
            if($borrac!=null){
                $ccs = Course_Category::all();
                foreach ($ccs as $cc){
                    if($course->id == $cc->course_id){
                        $cc->delete();
                    }
                }
            }
            if ($cats!=null){
                $ccss = Course_Category::all();
                foreach ($ccss as $cc){
                    if($course->id == $cc->course_id){
                        $cc->delete();
                    }
                }

                foreach ($cats as $cat){

                    $cur_cat[$cat] = new Course_Category();
                    $cur_cat[$cat]->course_id = $course->id;
                    $cur_cat[$cat]->category_id = $cat;
                    $cur_cat[$cat]->save();
                }
            }

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
