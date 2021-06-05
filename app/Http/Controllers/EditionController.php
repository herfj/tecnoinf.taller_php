<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Course_Category;
use App\Models\EClass;
use App\Models\Enrollment;
use App\Models\Institute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Edition;
use App\Models\User;
use Auth;

class EditionController extends Controller
{
    public function index(){
        $courses = Course::all();
        $editions = Edition::all();
        return view('editions.index', compact('editions','courses'));
    }

    public function create(Course $course)
    {
        $teacher = User::all();
        return view('editions.create', compact('course','teacher'));
    }

    public function store(Request $request)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'teacher_id' => 'required',
            'course_id' => 'required',
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $edition = Edition::create($request->all());
            $success = true;
            $mess = "La Edicion <strong>" . $edition->name . "</strong> se creo exitosamente!";
        } catch (exception $e) {
            $success = false;
            $mess = "No se pudo crear la edicion! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('editions.show', [$edition, "success" => $success, "mess" => $mess]);
    }

    public function show(Edition $edition){

        $teacher = User::all();
        $course = Course::all();
        $clases = EClass::all();
        $enrollments = Enrollment::all();
        $enroll = null;
        $user_has_enroll = false;

        foreach($enrollments as $enrollment) {
            if($enrollment->edition_id==$edition->id && (Auth::check() && $enrollment->student_id==Auth::user()->id)){
             $user_has_enroll=true;
             $enroll=$enrollment;
            }
        }
        return view('editions.show',compact('edition','teacher','course','clases','enrollments','user_has_enroll','enroll'));
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
        return redirect()->route('editions.show', [$edition, "success" => $success, "mess" => $mess]);
    }

    public function bajar_cupo($edition)
    {
        $ed = Edition::find($edition);
        $ed->space_available = ($ed->space_available-1);
        $ed->save();
    }

    public function destroy(Edition $edition){
        $success=$edition->delete();
        if($success){
            $mess="La edicion se ha eliminado";
        }else{

            $mess="La edicion no se ha podido eliminar";
        }
        return redirect()->route('courses.index', [ "success" => $success, "mess" => $mess]);
    }
    public function ronaldinho(Request $request){

    }

}
