<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view ('student.index', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;

        $student->name = $request->student_name;
        $student->surname = $request->student_surname;
        $student->group_id = $request->student_group_id;
         // $student->image_url = $request->student_image_url;

         //suteikiam paveiksliukui varda(2 tokie patys paveiksliukai, persivadina)
        //ar tuscias ar ne -true/false
        if($request->has('student_image_url')) {

            $imageName = time().'.'.$request->student_image_url->extension();
            $student->image_url = '/images/'. $imageName;

            $request->student_image_url->move(public_path('images'), $imageName);
        } else {
            $student->image_url = '/images/placeholder.png';
        }



        //1. info apie paveiksliuka irasyti i db
        //2. paveiksliuka kazkur ikeliam


        $student->save();

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show', ['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', ['student'=> $student] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->student_name;
        $student->surname = $request->student_surname;
        $student->group_id = $request->student_group_id;


        // jei paveiksliuko input uzpildytas ikelia nauja,
        // jei tuscias -> tada priskiria placeholder.png
        if($request->has('student_image_url')) {

            $imageName = time().'.'.$request->student_image_url->extension();
            $student->image_url = '/images/'. $imageName;

            $request->student_image_url->move(public_path('images'), $imageName);
        }

        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
}
