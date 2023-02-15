@extends('layouts.admin-panel')
@section('title', 'Profile')
@section('title-page', 'Profile')
@section('admin-panel')

    @push('head')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endpush




    <div class="card mx-2">
        <div class="card-body">
            <div class="row">
                @livewire('profile.update-profile-information-form')
            </div>
        </div>
    </div>


@endsection
