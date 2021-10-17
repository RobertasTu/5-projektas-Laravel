@extends('layouts.app')

@section('content')


<div class='container'>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add new school') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('school.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="school_name" class="col-md-4 col-form-label text-md-right">{{ __('School name:') }}</label>

                                <div class="col-md-6">
                                    <input id="school_name" type="text" class="form-control @error('name') is-invalid @enderror" name="school_name" value="" required autocomplete="school_name" autofocus>

                                    @error('school_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="school_description" class="col-md-4 col-form-label text-md-right">{{ __('School description:') }}</label>

                                <div class="col-md-6">
                                    <textarea type="text" class="form-control summernote-school_description" name="school_description" required autocomplete="school_description">

                                    @error('school_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="school_place" class="col-md-4 col-form-label text-md-right">{{ __('School place:') }}</label>

                                <div class="col-md-6">
                                    <input id="school_place" type="text" class="form-control"  name="school_place" required autocomplete="school_place">

                                    @error('school_place')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="school_phone" class="col-md-4 col-form-label text-md-right">{{ __('School phone:') }}</label>

                                <div class="col-md-6">
                                    <input id="school_phone" type="text" class="form-control" name="school_phone" required autocomplete="school_phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="school_logo" class="col-md-4 col-form-label text-md-right">{{ __(' School logo:') }}</label>
                                <div class="col-md-6">
                            <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add school') }}
                                    </button>
                                </div>
                                <a href='{{route('school.index')}}'>Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection

    <script>
        $(document).ready(function() {
            $(".summernote").summernote();

        });
    </script>


{{-- @extends('layouts.app')

@section('content')

<div class='container'>


<h1>Add school</h1>

<form method='POST' action="{{route('school.store')}}">
    School name: <input type='text' name='school_name' />
    School description: <input type='text' name='school_description' />
    School place: <input type='text' name='school_place' />
    School phone: <input type='text' name='school_phone' />
    @csrf
       <button type='submit'>Add school</button>





</form>
<a class='btn btn-primary' href='{{route('school.index')}}'>Back</a>

@endsection --}}

