<h1>Add school</h1>

<form method='POST' action="{{route('school.store')}}">
    School name: <input type='text' name='school_name' />
    School description: <input type='text' name='school_description' />
    School place: <input type='text' name='school_place' />
    School phone: <input type='text' name='school_phone' />
    @csrf
       <button type='submit'>Add school</button>





</form>
</div>
