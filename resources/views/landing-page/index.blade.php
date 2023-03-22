@extends('app')

@push('head')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="{{ asset('vendors/portfolio/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/portfolio/assets/css/styles.css') }}">
@endpush

@section('content')
    @include('landing-page.header')

    @include('landing-page.home')
    @include('landing-page.about')

    @include('landing-page.skills')
    @include('landing-page.qualification')


    @include('landing-page.service')
    @include('landing-page.portfolio')


    @include('landing-page.project')
    @include('landing-page.testimonial')
    @include('landing-page.contact-me')


    @include('landing-page.footer')
@endsection




@push('script')
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}
    @include('sweetalert::alert')

    <!--==================== SWIPER JS ====================-->
    <script src="{{ asset('vendors/portfolio/assets/js/swiper-bundle.min.js') }}"></script>
    <!--==================== MAIN JS ====================-->
    <script src="{{ asset('vendors/portfolio/assets/js/main.js') }}"></script>
@endpush
