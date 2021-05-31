<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
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
            'description' => 'required',
            'edition_id' => 'required',
            'student_id' => 'required',
            'state' => 'required',
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $enrollment = Enrollment::create($request->all());
            $success = true;
            $mess = "La Solicitud se envio exitosamente!";
        } catch (exception $e) {
            $success = false;
            $mess = "No se enviar la solicitud";
        }
        return redirect()->route('enrollments.en_state', [$enrollment, "success" => $success, "mess" => $mess]);
    }

    public function en_state(Enrollment $enrollment)
    {
        return view('enrollments.en_state', compact('enrollment'));
    }
}
