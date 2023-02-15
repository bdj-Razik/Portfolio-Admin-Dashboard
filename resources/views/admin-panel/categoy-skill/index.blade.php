@extends('layouts.admin-panel')
@section('title', 'Category Skill')
@section('title-page', 'Category Skill')
@section('admin-panel')


    <div class="card mx-2">
        <div class="card-body">
            <div class="row ">
                <div class="col-12">
                    @livewire('category-skill.category-skill-component')
                </div>
            </div>
        </div>
    </div>


@endsection
