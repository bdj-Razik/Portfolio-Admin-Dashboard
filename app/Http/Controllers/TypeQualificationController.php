<?php

namespace App\Http\Controllers;

use App\Models\TypeQualification;
use Illuminate\Http\Request;

class TypeQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin-panel.type-qualification.index');
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
     * @param  \App\Models\TypeQualification  $typeQualification
     * @return \Illuminate\Http\Response
     */
    public function show(TypeQualification $typeQualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeQualification  $typeQualification
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeQualification $typeQualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeQualification  $typeQualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeQualification $typeQualification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeQualification  $typeQualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeQualification $typeQualification)
    {
        //
    }
}
