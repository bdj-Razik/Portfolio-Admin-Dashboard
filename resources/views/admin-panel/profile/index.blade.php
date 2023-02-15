@extends('layouts.admin-panel')
@section('title', 'Profile')
@section('title-page', 'Profile')
@section('admin-panel')

    @push('head')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endpush

    @livewire('profile.update-profile-information-form')






@endsection
