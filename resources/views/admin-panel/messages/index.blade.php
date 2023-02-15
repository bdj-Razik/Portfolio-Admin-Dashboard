@extends('layouts.admin-panel')
@section('title', 'Message')
@section('title-page', 'Message')
@section('admin-panel')


    <div class="card mx-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @livewire('message.message-component')
                </div>
            </div>
        </div>
    </div>

@endsection
