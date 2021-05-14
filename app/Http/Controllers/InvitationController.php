<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;

class InvitationController extends Controller
{
    private $mails_array = array();

    public function index()
    {
        $invitations = Invitation::all();
        return view('invitations.index', compact('invitations'));
    }

    public function create()
    {
        return view('invitations.create');
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
                'hash' => Hash::make($request['email']),
            ]);
            $success = true;
            $mess = "Se envio la invitación a <strong>" . $invitation->mail . "</strong> exitosamente!";
        } catch (execption $e) {
            $success = false;
            $mess = "No se pudo crear la invitación! - <strong>Error: " . $e->getMessage() . "</strong>";
        }
        return redirect()->route('invitations.show', [$invitation, "success" => $success, "mess" => $mess]);

    }
}
