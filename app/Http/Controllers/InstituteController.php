<?php

namespace App\Http\Controllers;
use App\Models\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function index(){
        $institutes = Institute::all();
        return view('institutes.index', compact('institutes'));
    }
    public function create(){
        return view('institutes.create');
    }
    public function store(Request $request){

        $institute = new Institute();
        $institute->name=$request->name;
        $institute->description=$request->description;
        $success = $institute->save();
        if($success){
            $mess = "El instituto <strong>".$institute->name."</strong> se creo exitosamente!" ;
        }else{
            $mess = "<strong>UPSS!!</strong> el instituto no se pudo crear!";
        }
        return redirect()->route('institutes.show',[$institute, "success"=>$success,"mess"=>$mess] );
    }
    public function show($instituteId){
        $institute = Institute::find($instituteId);
        $createdSuccess = false;
        return view('institutes.show',compact('institute'));
    }
}
