@extends('layouts.app')

@section('content')

<div class='container'>

<h1>Information about student</h1>

<h2>{{ $student->id }}. {{ $student->name }} {{ $student->surname }}, Group id: {{ $student->group_id }} <a class='btn btn-primary' href='{{route('student.edit',[$student])}}'>Edit</a></h2>



        <img src="{{ $student->image_url }}" alt="{{$student->name}}" style="width:400px">


                <form method='POST' action="{{route('student.destroy', [$student]) }}"> <br>

                @csrf
                <button class='btn btn-secondary' type='submit'>Delete</button>

                </form>


    <a href='{{route('student.index')}}'>Back<a>
</div>


@endsection



