@extends('layouts.admin-panel')
@section('title', 'Client')
@section('title-page', 'Client')
@section('admin-panel')

    <div class="card mx-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @livewire('client.client-component')
                </div>
            </div>
        </div>
    </div>

@endsection
