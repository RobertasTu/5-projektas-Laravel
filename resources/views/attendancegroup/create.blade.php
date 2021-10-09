<h1>Add attendance group</h1>

<form method='POST' action="{{route('attendancegroup.store')}}">
    Attendance group name: <input type='text' name='attendancegroup_name' />
    Attendance group description: <input type='text' name='attendancegroup_description' />
    Attendance group difficulty: <input type='text' name='attendancegroup_difficulty' />
    Attendance group school ID: <input type='text' name='attendancegroup_school_id' />
    @csrf
       <button type='submit'>Add school</button>





</form>
</div>
