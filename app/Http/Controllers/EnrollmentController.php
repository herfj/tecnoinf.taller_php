<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Edition;
use Auth;

class EnrollmentController extends Controller
{
    public function create(Edition $edition)
    {
        $enrollments = Enrollment::all();
        if($enrollments==null){
            return view('enrollments.create',compact('edition'));
        }
        foreach($enrollments as $enrollment) {
            if($enrollment->edition_id==$edition->id && $enrollment->student_id==Auth::user()->id)
            {
                return view('enrollments.en_state',compact('enrollment'));
            }
        }
        return view('enrollments.create',compact('edition'));
    }

    public function store(Request $request)
    {
        //Validacion de los parametros
        $request->validate([
       ]);
        $validated= $request->validate([
            'letter_of_intent' => 'required',
            'edition_id' => 'required',
            'student_id' => 'required',
            'state' => 'required',
        ]);

        $validated['state_description'] = "";
        $validated['course_grade'] = 0;
        $validated['course_grade_description'] = "";

        try {
            //Creacion del objeto y los guarda en BD
            $enrollment = Enrollment::create($validated);
            $success = true;
            $mess = "La Solicitud se envio exitosamente!";
        } catch (\Illuminate\Database\QueryException $e) {
            $success = false;
            $mess = "No se enviar la solicitud";
            return redirect()->route('home', [ "success" => $success, "mess" => $mess]);
        }
        return redirect()->route('enrollments.en_state', [$enrollment, "success" => $success, "mess" => $mess]);
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        //Validacion de los parametros
        $request->validate([
            'state_description' => 'required',
            'state' => 'required',
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $enrollment->update($request->all());
            $success = true;
            $stat = $request->state;
            if($stat == "aceptado"){
                app('App\Http\Controllers\EditionController')->bajar_cupo($enrollment->edition_id);
            }
            $mess = "La inscripción se actualizó exitosamente!";

        } catch (\Illuminate\Database\QueryException $e) {
            $success = false;
            $mess = "La inscripción no se actualizó!";
            return redirect()->route('home', [ "success" => $success, "mess" => $mess]);
        }
        return redirect()->route('editions.inscriptions', [$enrollment->edition_id, "success" => $success, "mess" => $mess]);
    }

    public function notas(Request $request, Enrollment $enrollment)
    {
        //Validacion de los parametros
        $request->validate([
            'course_grade_description' => 'required',
            'course_grade' => 'required',
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $enrollment->update($request->all());
            $success = true;

            $mess = "La inscripción se cerró exitosamente!";

        } catch (\Illuminate\Database\QueryException $e) {
            $success = false;
            $mess = "La inscripción no se cerró!";
            return redirect()->route('home', [ "success" => $success, "mess" => $mess]);
        }
        return redirect()->route('editions.show', [$enrollment->edition_id, "success" => $success, "mess" => $mess]);
    }

    public function mylist(){
        if(Auth::check()){
            $enrollments = Enrollment::all();
            $my_enrollments = [];
            foreach ($enrollments as $enrollment){
                if($enrollment->student_id===Auth::user()->id){
                    array_push($my_enrollments, $enrollment);
                }
            }
            return view('enrollments.mylist', compact('my_enrollments'));
        }else{
            abort(403);
        }
    }
    public function en_state(Enrollment $enrollment)
    {
            if(Auth::check() && Auth::user()->id===$enrollment->student_id) {
                return view('enrollments.en_state', compact('enrollment'));
            }
            else{
                abort(403);
            }
    }
}
