@extends('layouts.admin-panel')
@section('title', 'Type Qualification')
@section('title-page', 'Type Qualification')
@section('admin-panel')

    <div class="card mx-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @livewire('type-qualification.type-qualification-component')
                </div>
            </div>
        </div>
    </div>

@endsection
