@extends('layouts.app')

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
@endsection
