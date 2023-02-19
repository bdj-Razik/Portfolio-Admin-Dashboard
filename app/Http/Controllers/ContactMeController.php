<?php

namespace App\Http\Controllers;

use App\Models\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
