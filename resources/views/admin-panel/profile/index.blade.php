@extends('layouts.admin-panel')
@section('title', 'Profile')
@section('title-page', 'Profile')
@section('admin-panel')
@section('head-page')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@endsection

@livewire('profile.update-profile-information-form')


@endsection
