<h1>Information about attendance group</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Difficulty</th>
        <th>School ID</th>
    </tr>



        <tr>
            <td>{{ $attendancegroup->id }}</td>

            <td>{{ $attendancegroup->name }}</td>
            <td>{{ $attendancegroup->description }}</td>
            <td>{{ $attendancegroup->difficulty }}</td>
            <td>{{ $attendancegroup->school_id }}</td>

            <td>
                <a href='{{route('attendancegroup.edit',[$attendancegroup])}}'>Edit</a>
                <form method='POST' action="{{route('attendancegroup.destroy', [$attendancegroup]) }}">

                @csrf
                <button type='submit'>Delete</button>

                </form>
            </td>
        </tr>


    </table>
