<?php

namespace App\Http\Controllers;

use App\Mail\SendResponseMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        // Mail::to($request->email);
        Mail::to('f.razik@gmail.com')->send(new SendResponseMail('test'));

    }
}
