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
        $createdSuccess = $institute->save();
        return redirect()->route('institutes.show',[$institute, "createdSuccess"=>$createdSuccess]);
    }
    public function show($instituteId){
        $institute = Institute::find($instituteId);
        $createdSuccess = false;
        return view('institutes.show',compact('institute'));
    }
}
