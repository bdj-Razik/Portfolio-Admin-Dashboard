@extends('layouts.admin-panel')
@section('title', 'Freelance')
@section('title-page', 'Freelance')
@section('admin-panel')

    <div class="card mx-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @livewire('freelance.freelance-component')
                </div>
            </div>
        </div>
    </div>

@endsection
