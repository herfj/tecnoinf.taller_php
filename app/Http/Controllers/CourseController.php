<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return "Index de cursos";
    }
    public function create(){
        return "Create de cursos";
    }
    public function show($courseId){
        return "Show curso: ".$courseId;
    }
}
