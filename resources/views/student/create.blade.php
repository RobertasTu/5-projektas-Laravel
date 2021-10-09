<h1>Add student</h1>

<form method='POST' action="{{route('student.store')}}">
    Name: <input type='text' name='student_name' />
    Surname: <input type='text' name='student_surname' />
    Group ID: <input type='text' name='student_group_id' />
    Image: <input type='text' name='student_image_url' />
    @csrf
       <button type='submit'>Add student</button>





</form>
</div>
