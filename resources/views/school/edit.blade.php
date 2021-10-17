@extends('layouts.app')

@section('content')



<div class='container'>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit school information') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('school.update', [$school]) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="school_name" class="col-md-4 col-form-label text-md-right">{{ __('School name:') }}</label>

                                <div class="col-md-6">
                                    <input id="school_name" type="text" class="form-control @error('name') is-invalid @enderror" name="school_name" value='{{$school->name}}' required autocomplete="school_name" autofocus>

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
                                    <input id="school_description" type="text" class="form-control" name="school_description" value='{{$school->description}}' required autocomplete="school_description">

                                    @error('school_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="school_place" class="col-md-4 col-form-label text-md-right">{{ __('School place:') }}</label>

                                <div class="col-md-6">
                                    <input id="school_place" type="text" class="form-control"  name="school_place" value='{{$school->place}}' required autocomplete="school_place">

                                    @error('school_place')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="school_phone" class="col-md-4 col-form-label text-md-right">{{ __('School phone number:') }}</label>

                                <div class="col-md-6">
                                    <input id="school_phone" type="text" class="form-control" name="school_phone" value='{{$school->phone}}' required autocomplete="school_phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="school_logo" class="col-md-4 col-form-label text-md-right">{{ __(' School logo:') }}</label>
                                <div class="col-md-6">
                            <input type="file" name="image" class="form-control" value=''>
                            <p>{{$school->logo}}</p>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save new school info') }}
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

{{-- @extends('layouts.app')

@section('content')

<div class='container'>


<form method='POST' action="{{route('school.update', [$school])}}">
    Name: <input type='text' name='school_name' value='{{$school->name}}' />
    Description: <input type='text' name='school_description' value='{{$school->description}}' />
    Place: <input type='text' name='school_place' value='{{$school->place}}' />
    Phone: <input type='text' name='school_phone' value='{{$school->phone}}' />

    @csrf

       <button type='submit'>Save</button>


</form>

<a class='btn btn-primary' href='{{route('school.index')}}'>Back</a>

</div>
@endsection --}}
