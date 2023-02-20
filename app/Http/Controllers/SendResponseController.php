<?php

namespace App\Http\Controllers;

use App\Mail\SendResponseMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class SendResponseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $request->validate([

            'email' => 'required|email',
            'message' => 'required|string',

        ]);

        try {
            Mail::to($request->email)->send(new SendResponseMail($request->message));
            Alert::toast('Your mail has been sent successfuly', 'success');

        } catch (Exception $ex) {


            Alert::toast('Error !!', 'error');

        }

        return back();
    }
}
