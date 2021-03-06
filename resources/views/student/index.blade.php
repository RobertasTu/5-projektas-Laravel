{{-- layouts/app.blade --}}

@extends('layouts.app')

@section('content')

<div class='container'>

<h1>Student index</h1>



<table class="table table-striped">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Group ID</th>
    {{-- <th>Image Url</th> --}}
    <th>Action</th>
</tr>

<a class='btn btn-primary' href='{{route('student.create')}}'>Enlist new student<a>
@foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td><a href="{{route('student.show', [$student])}}">{{ $student->name }}</a></td>
        <td>{{ $student->surname }}</td>
        <td>{{ $student->group_id }}</td>
        {{-- <td><img src="{{ $student->image_url }}" alt=" {{ $student->name }}" /></td> --}}

        <td>
            <a href='{{route('student.edit',[$student])}}'>Edit</a>
            <form method='POST' action="{{route('student.destroy', [$student]) }}">

            @csrf
            <button class='btn btn-secondary' type='submit'>Delete</button>

            </form>
        </td>
    </tr>

@endforeach


</table>

</div>
@endsection

