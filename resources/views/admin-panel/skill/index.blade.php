@extends('layouts.admin-panel')
@section('title', 'Skill')
@section('title-page', 'Skill')
@section('admin-panel')


    <div class="card mx-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12">

                    @livewire('skill.skill-component')
                </div>
            </div>
        </div>
    </div>

@endsection
