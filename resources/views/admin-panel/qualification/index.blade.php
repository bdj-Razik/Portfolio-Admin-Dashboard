@extends('layouts.admin-panel')
@section('title', 'Qualification')
@section('title-page', 'Qualification')
@section('admin-panel')

    <div class="card mx-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @livewire('qualification.qualification-component')
                </div>
            </div>
        </div>
    </div>

@endsection
