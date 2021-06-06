<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Edition;

class HomeController extends Controller
{
    public function __invoke(){
        $courses = Course::all();
        $editions = Edition::all();
        return view('home', compact('editions','courses'));
    }
}
