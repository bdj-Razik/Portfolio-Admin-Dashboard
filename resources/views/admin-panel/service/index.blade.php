@extends('layouts.admin-panel')
@section('title', 'Service')
@section('title-page', 'Service')
@section('admin-panel')


    <div class="card mx-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12">

                    @livewire('service.service-component')
                </div>
            </div>
        </div>
    </div>

@endsection
