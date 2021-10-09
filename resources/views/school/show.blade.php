@extends('layouts.app')

@section('content')

<div class='container'>

<h1>Information about school</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Place</th>
        <th>Phone</th>
    </tr>



        <tr>
            <td>{{ $school->id }}</td>

            <td>{{ $school->name }}</td>
            <td>{{ $school->description }}</td>
            <td>{{ $school->place }}</td>
            <td>{{ $school->phone }}</td>

            <td>
                <a href='{{route('school.edit',[$school])}}'>Edit</a>
                <form method='POST' action="{{route('school.destroy', [$school]) }}">

                @csrf
                <button type='submit'>Delete</button>

                </form>
            </td>
        </tr>


    </table>
    <a class='btn btn-primary' href='{{route('school.index')}}'>Back</a>
</div>

@endsection
