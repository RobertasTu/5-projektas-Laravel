@extends('layouts.app')

@section('content')

<div class='container'>

<h1>Attendance index</h1>



<table class="table table-striped">
<tr>
    <a class='btn btn-primary' href='{{route('attendancegroup.create')}}'>Add new<a>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Difficulty</th>
    <th>School ID</th>
    {{-- <th>Logo</th> --}}
    <th>Action</th>

</tr>


@foreach ($attendancegroups as $attendancegroup)
    <tr>
        <td>{{ $attendancegroup->id }}</td>

        <td><a href="{{route('attendancegroup.show', [$attendancegroup])}}">{{ $attendancegroup->name }}</a></td>

        {{-- {{}} -nuima formatavima; {!! su formatavimu !!} --}}
        <td>{!! $attendancegroup->description !!}</td>
        <td>{{ $attendancegroup->difficulty }}</td>
        <td>{{ $attendancegroup->school_id }}</td>
        {{-- <td>{{ $attendancegroup->logo }}</td> --}}


        <td>
            <a href='{{route('attendancegroup.edit',[$attendancegroup])}}'>Edit</a>
            <form method='POST' action="{{route('attendancegroup.destroy', [$attendancegroup]) }}">

            @csrf
            <button type='submit'>Delete</button>

            </form>
        </td>
    </tr>
@endforeach

</table>

</div>
@endsection
