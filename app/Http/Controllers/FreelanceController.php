<?php

namespace App\Http\Controllers;

use App\Models\Freelances;
use Illuminate\Http\Request;

class FreelanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin-panel.freelance.index');
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
     * @param  \App\Models\Freelances  $Freelances
     * @return \Illuminate\Http\Response
     */
    public function show(Freelances $Freelances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Freelances  $Freelances
     * @return \Illuminate\Http\Response
     */
    public function edit(Freelances $Freelances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Freelances  $Freelances
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freelances $Freelances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Freelances  $Freelances
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freelances $Freelances)
    {
        //
    }
}
