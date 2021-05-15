<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'type_of_user' => 'required',
            'birthday_date' => 'required',
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'type_of_user' => $request['type_of_user'],
                'birthday_date' => $request['birthday_date'],
                'password' => Hash::make($request['password']),
            ]);

            $success = true;
            $mess = "El usuario <strong>" . $user->name . "</strong> se creo exitosamente!";
        } catch (execption $e) {
            $success = false;
            $mess = "No se pudo crear el usuario! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('admin.users.show', [$user, "success" => $success, "mess" => $mess]);
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //Validacion de los parametros
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $user->update($request->all());

            $success = true;
            $mess = "El usuario <strong>" . $user->name . "</strong> se actualizado exitosamente!";
        } catch (execption $e) {
            $success = false;
            $mess = "No se pudieron aplicar los cambios! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('admin.users.show', [$user, "success" => $success, "mess" => $mess]);
    }

    public function destroy(Institute $user){
        $success=$user->delete();
        if($success){
            $mess="El usuario se ha eliminado";
        }else{

            $mess="El usuario no se ha podido eliminar";
        }
        return redirect()->route('admin.users.index', [ "success" => $success, "mess" => $mess]);
    }
}
