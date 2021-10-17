@extends('layouts.app')

@section('content')


<div class='container'>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add attendance group') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('attendancegroup.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="attendancegroup_name" class="col-md-4 col-form-label text-md-right">{{ __('Attendance group name:') }}</label>

                                <div class="col-md-6">
                                    <input id="attendancegroup_name" type="text" class="form-control @error('name') is-invalid @enderror" name="attendancegroup_name" value="{{ old('attendancegroup_name') }}" required autocomplete="attendancegroup_name" autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="attendancegroup_description" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup description:') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="attendancegroup_description" type="text" class="form-control" name="attendancegroup_description" required autocomplete="attendancegroup_description"> --}}

                                   <textarea class='summernote' name='attendancegroup_description'>
                                   </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="attendancegroup_difficulty" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup difficulty:') }}</label>

                                <div class="col-md-6">
                                    <input id="attendancegroup_difficulty" type="text" class="form-control"  name="attendancegroup_difficulty" required autocomplete="attendancegroup_difficulty">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="attendancegroup_school_id" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup school ID:') }}</label>

                                <div class="col-md-6">
                                    <input id="attendancegroup_school_id" type="text" class="form-control" name="attendancegroup_school_id" required autocomplete="attendancegroup_school_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="attendancegroup_logo" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup school logo:') }}</label>
                                <div class="col-md-6">
                            <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add group') }}
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
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

        <h1>Add attendance group</h1>
            <div class="card-body">
                <form method='POST' action="{{route('attendancegroup.store')}}">
                    <div class="form-group row">
                        Attendance group name: <input type='text' name='attendancegroup_name' />
                        Attendance group description: <input type='text' name='attendancegroup_description' />
                        Attendance group difficulty: <input type='text' name='attendancegroup_difficulty' />
                        Attendance group school ID: <input type='text' name='attendancegroup_school_id' />
                        @csrf
                    <button type='submit'>Add group</button>


                </form> --}}

            {{-- </div>
        </div>
    </div>
    </div>
</div> --}}

<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>


@endsection
