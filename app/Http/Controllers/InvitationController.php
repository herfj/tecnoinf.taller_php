<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use Illuminate\Support\Facades\Hash;

class InvitationController extends Controller
{
    private $mails_array = array();

    public function index()
    {
        $invitations = Invitation::paginate();
        return view('invitations.index', compact('invitations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        try {
            //Creacion del objeto y los guarda en BD
            $invitation = Invitation::create([
                'email' => $request['email'],
                'status' => false,
                'user_id' => null,
                'id' => md5($request['email']),
            ]);
            $success = true;
            $mess = "Se envio la invitación a <strong>" . $invitation->mail . "</strong> exitosamente!";
        } catch (execption $e) {
            $success = false;
            $mess = "No se pudo crear la invitación! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('invitations.index', [$invitation, "success" => $success, "mess" => $mess]);
    }

    public function accept(Invitation $invitation){

        if(!$invitation->status){
            return view('invitations.accept', compact('invitation'));
        }
        else{
            abort(410);
        }
    }

    public function update(Request $request, Invitation $invitation)
    {
        //Validacion de los parametros
        $validated= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::min(8)],
            'birthday_date' => 'required',
        ]);
        $validated['type_of_user'] = 'student';

        try {
            //user controller store from invitation
            $user = app('App\Http\Controllers\UserController')->storeFromInvite($validated);
            //
            //Creacion del objeto y los guarda en BD
            $invitation->update([
                'user_id'=>$user->id,
                'status'=>true,
            ]);


        } catch (execption $e) {
            $success = false;
        }
        return redirect()->route('/', [$invitation, "success" => $success, "mess" => $mess]);
    }
}
