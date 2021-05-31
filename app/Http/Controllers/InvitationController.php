<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use App\Models\Invitation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Closure;
use Auth;

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
            $hashensen = md5($request['email']);
            $invitation = Invitation::create([
                'email' => $request['email'],
                'status' => false,
                'user_id' => null,
                'hash' => $hashensen,
            ]);
            Mail::to($request['email'])->send(new WelcomeMail($hashensen));
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
            abort(401);
        }
    }

    public function update(Request $request, Invitation $invitation)
    {

        //Validacion de los parametros
        $validated= $request->validate([
            'name' => 'required|string|max:255',
                'password' => ['required', 'confirmed', Rules\Password::min(8)],
            'birthday_date' => 'required',
        ]);

        $validated['email'] = $invitation->email;
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

//            return redirect()->route('/');

            return redirect(RouteServiceProvider::HOME);
        } catch (execption $e) {
            $success = false;
        }
    }
}
