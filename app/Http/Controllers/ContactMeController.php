<?php

namespace App\Http\Controllers;

use App\Models\ContactMe;
use App\Notifications\MessagerieNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use RealRashid\SweetAlert\Facades\Alert;

class ContactMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin-panel.messages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => 'required|string|max:155',
            'name' => 'required|string|max:55',
            'email' => 'required|email',
            'description' => 'required|string|max:255',

        ]);

        DB::beginTransaction();

        try {

            $contactMe = ContactMe::create([

                'title' => $request->title,
                'name' => $request->name,
                'email' => $request->email,
                'description' => $request->description,

            ]);

            Notification::send(Auth::user(), new MessagerieNotification($contactMe));

            DB::commit();

            Alert::toast('Your mail has been sent successfuly', 'success');

            return back();

        } catch (\Throwable$th) {

            DB::rollBack();

            Alert::toast('Error !!', 'error');

            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function show($messageID)
    {
        //
        $message = ContactMe::find($messageID);

        if ($notification = Auth::user()->unreadNotifications()->whereJsonContains('data->messagerie->id', $message->id)->first()) {

            $notification->markAsRead();

        }

        return view('admin-panel.messages.send')->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMe $contactMe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactMe $contactMe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMe $contactMe)
    {
        //
    }
}
