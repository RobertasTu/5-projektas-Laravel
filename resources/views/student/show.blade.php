@extends('layouts.app')

@section('content')

<div class='container'>

<h1>Information about student</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Group ID</th>
        <th>Image URL</th>
    </tr>



        <tr>
            <td>{{ $student->id }}</td>

            <td>{{ $student->name }}</td>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->group_id }}</td>
            <td>{{ $student->image_url }}</td>

            <td>
                <a href='{{route('student.edit',[$student])}}'>Edit</a>
                <form method='POST' action="{{route('student.destroy', [$student]) }}">

                @csrf
                <button type='submit'>Delete</button>

                </form>
            </td>
        </tr>

    </table>
    <a href='{{route('student.index')}}'>Back<a>
</div>


@endsection



