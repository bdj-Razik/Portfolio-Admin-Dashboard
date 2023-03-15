@extends('layouts.admin-panel')
@section('title', 'Settings')
@section('title-page', 'Settings')
@section('admin-panel')

    @push('head')
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endpush

    @livewire('profile.update-password-form')

    @livewire('profile.two-factor-authentication-form')

@endsection
