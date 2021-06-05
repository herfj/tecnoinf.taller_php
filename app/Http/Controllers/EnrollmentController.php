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

        $validated['state_description'] = "No ingresado";
        $validated['course_grade'] = 0;
        $validated['course_grade_description'] = "No ingresado";

        try {
            //Creacion del objeto y los guarda en BD
            $enrollment = Enrollment::create($validated);
            $success = true;
            $mess = "La Solicitud se envio exitosamente!";
        } catch (exception $e) {
            $success = false;
            $mess = "No se enviar la solicitud";
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
            app('App\Http\Controllers\EditionController')->bajar_cupo($enrollment->edition_id);
            $mess = "La inscripción se actualizó exitosamente!";

        } catch (execption $e) {
            $success = false;
            $mess = "La inscripción no se actualizó!";
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
        return view('enrollments.en_state', compact('enrollment'));
    }
}
