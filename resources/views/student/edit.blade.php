
@extends('layouts.app')

@section('content')



<div class='container'>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit student information') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('student.update', [$student]) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="student_name" class="col-md-4 col-form-label text-md-right">{{ __('Student name:') }}</label>

                                <div class="col-md-6">
                                    <input id="student_name" type="text" class="form-control @error('name') is-invalid @enderror" name="student_name" value='{{$student->name}}' required autocomplete="student_name" autofocus>

                                    @error('student_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="student_surname" class="col-md-4 col-form-label text-md-right">{{ __('Student surname:') }}</label>

                                <div class="col-md-6">
                                    <input id="student_surname" type="text" class="form-control" name="student_surname" value='{{$student->surname}}' required autocomplete="student_surname">

                                    @error('student_surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="student_group_id" class="col-md-4 col-form-label text-md-right">{{ __('Student group ID:') }}</label>

                                <div class="col-md-6">
                                    <input id="student_group_id" type="text" class="form-control"  name="student_group_id" value='{{$student->group_id}}' required autocomplete="student_group_id">

                                    @error('student_group_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="student_image_url" class="col-md-4 col-form-label text-md-right">{{ __('Student image URL:') }}</label>

                                <div class="col-md-6">
                                    <input id="student_image_url" type="text" class="form-control" name="student_image_url" value='{{$student->image_url}}' required autocomplete="student_image_url">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save new student info') }}
                                    </button>
                                </div>
                                <a href='{{route('student.index')}}'>Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{-- @extends('layouts.app')

@section('content')

<div class='container'>

<form method='POST' action="{{route('student.update', [$student])}}">
    Name: <input type='text' name='student_name' value='{{$student->name}}' />
    Surname: <input type='text' name='student_surname' value='{{$student->surname}}' />
    Group ID: <input type='text' name='student_group_id' value='{{$student->group_id}}' />
    Image URL: <input type='text' name='student_image_url' value='{{$student->image_url}}' />

    @csrf

       <button type='submit'>Save</button>


</form>

<a href='{{route('student.index')}}'>Back<a>
</div> --}}

@endsection
