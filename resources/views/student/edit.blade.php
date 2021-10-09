<form method='POST' action="{{route('student.update', [$student])}}">
    Name: <input type='text' name='student_name' value='{{$student->name}}' />
    Surname: <input type='text' name='student_surname' value='{{$student->surname}}' />
    Group ID: <input type='text' name='student_group_id' value='{{$student->group_id}}' />
    Image URL: <input type='text' name='student_image_url' value='{{$student->image_url}}' />

    @csrf

       <button type='submit'>Save</button>


</form>
