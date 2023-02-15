@extends('layouts.admin-panel')
@section('title', 'Portfolio')
@section('title-page', 'Portfolio')
@section('admin-panel')


    <div class="card mx-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @livewire('portfolio.portfolio-component')
                </div>
            </div>
        </div>
    </div>

@endsection
