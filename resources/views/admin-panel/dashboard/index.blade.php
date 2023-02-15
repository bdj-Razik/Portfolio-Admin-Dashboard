@extends('layouts.admin-panel')
@section('title', 'Dahboard')
@section('title-page', 'Dahboard')
@section('admin-panel')

    @push('head')
        <link rel="stylesheet" href="{{ asset('vendors/css/dashboard.css') }}">
    @endpush

    @livewire('dashboard.dashboard-component')


@endsection
