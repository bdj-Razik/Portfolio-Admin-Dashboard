@extends('layouts.admin-panel')
@section('title', 'About Us')
@section('title-page', 'About Us')
@section('admin-panel')

    <div class="card mx-2 mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @livewire('abouts-us.about-us-component')
                </div>
            </div>
        </div>
    </div>

@endsection
