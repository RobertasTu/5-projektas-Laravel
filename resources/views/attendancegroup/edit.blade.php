@extends('layouts.app')

@section('content')



<div class='container'>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit attendance group') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('attendancegroup.update', [$attendancegroup]) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="attendancegroup_name" class="col-md-4 col-form-label text-md-right">{{ __('Attendance group name:') }}</label>

                                <div class="col-md-6">
                                    <input id="attendancegroup_name" type="text" class="form-control @error('name') is-invalid @enderror" name="attendancegroup_name" value='{{$attendancegroup->name}}' required autocomplete="attendancegroup_name" autofocus>

                                    @error('attendancegroup_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="attendancegroup_description" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup description:') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="attendancegroup_description" type="text" class="form-control" name="attendancegroup_description" value='{{$attendancegroup->description}}' required autocomplete="attendancegroup_description"> --}}
                                    <textarea class='summernote' name='attendancegroup_description' value='{{$attendancegroup->description}}'>
                                    </textarea>



                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="attendancegroup_difficulty" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup difficulty:') }}</label>

                                <div class="col-md-6">
                                    <input id="attendancegroup_difficulty" type="text" class="form-control"  name="attendancegroup_difficulty" value='{{$attendancegroup->difficulty}}' required autocomplete="attendancegroup_difficulty">

                                    @error('attendancegroup_difficulty')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="attendancegroup_school_id" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup school ID:') }}</label>

                                <div class="col-md-6">
                                    <input id="attendancegroup_school_id" type="text" class="form-control" name="attendancegroup_school_id" value='{{$attendancegroup->school_id}}' required autocomplete="attendancegroup_school_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="attendancegroup_logo" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup school logo:') }}</label>
                                <div class="col-md-6">

                            <input type="file" name="image" class="form-control" />
                            <p>{{ $attendancegroup->logo }} </p>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save new group info') }}
                                    </button>
                                </div>
                                <a href='{{route('attendancegroup.index')}}'>Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $(".summernote").summernote();

        });

        </script>




{{-- <div class='container'>

<h2>Attendance group edit</h2>

<form method='POST' action="{{route('attendancegroup.update', [$attendancegroup])}}">
    Name: <input type='text' name='attendancegroup_name' value='{{$attendancegroup->name}}' />
    Description: <input type='text' name='attendancegroup_description' value='{{$attendancegroup->description}}' />
    Difficulty: <input type='text' name='attendancegroup_difficulty' value='{{$attendancegroup->difficulty}}' />
    School ID: <input type='text' name='attendancegroup_school_id' value='{{$attendancegroup->school_id}}' />

    @csrf

       <button type='submit'>Save</button>


</form>

<a class='btn btn-primary' href='{{route('attendancegroup.index')}}'>Back</a>
</div> --}}

@endsection
