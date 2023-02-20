@extends('layouts.admin-panel')
@section('title', 'Send Response Message')
@section('title-page', 'Send Response Message')
@section('admin-panel')


    <div class="card mx-2">
        <div class="card-body">
            <form action="{{ route('sendResponse') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="full_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="full_name" value='{{ $message->name }}'
                            autocomplete="off" readonly>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value='{{ $message->email }}'
                            autocomplete="off" readonly>
                    </div>



                    <div class="col-12 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value='{{ $message->title }}'
                            autocomplete="off" readonly>
                    </div>


                    <div class="col-12 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value='{{ $message->description }}'
                            autocomplete="off" readonly>
                    </div>


                </div>

                <div class="row my-3">
                    <div class="col-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control  @error('message')  is-invalid  @enderror" name="message"></textarea>
                        @error('message')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row col-12 my-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block"><span><i
                                class="fa-regular fa-envelope"></i></span>&ensp;Send</button>
                </div>

            </form>
        </div>
    </div>


@endsection
