<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Course_Category;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $category = Category::create($request->all());

            $success = true;
            $mess = "La categoria <strong>" . $category->name . "</strong> se creo exitosamente!";
        } catch (\Illuminate\Database\QueryException $e) {
            $success = false;
            $mess = "No se pudo crear la categoria! - <strong>Error: " . $e->getMessage() . "</strong>";

            return redirect()->route('home', [ "success" => $success, "mess" => $mess]);
        }
        return redirect()->route('categories.show', [$category, "success" => $success, "mess" => $mess]);
    }

    public function show(Category $category)
    {
        $cur_cat = Course_Category::all();
        $courses = Course::all();
        return view('categories.show', compact('category','cur_cat','courses'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $category->update($request->all());

            $success = true;
            $mess = "La categoria <strong>" . $category->name . "</strong> se actualizado exitosamente!";
        } catch (\Illuminate\Database\QueryException $e) {
            $success = false;
            $mess = "No se pudieron aplicar los cambios! - <strong>Error: " . $e->getMessage() . "</strong>";

            return redirect()->route('home', [ "success" => $success, "mess" => $mess]);
        }
        return redirect()->route('categories.show', [$category, "success" => $success, "mess" => $mess]);
    }

    public function destroy(Category $category){
        $success=$category->delete();
        if($success){
            $mess="La categoria se ha eliminado";
        }else{

            $mess="la categoria no se ha podido eliminar";
        }
        return redirect()->route('categories.index', [ "success" => $success, "mess" => $mess]);
    }
}
