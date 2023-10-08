<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * List all students.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', [
            'students' => $students
        ]);
    }

    /**
     * Display single student record.
     * @param $id
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show', [
            'student' => $student
        ]);
    }


    /**
     * Display create new student form.
     */
    public function create()
    {
        return view('student.create');
    }


    /**
     * Insert new student.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        /*
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->is_male = $request->is_male;
        $student->save();
        */

        Student::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'is_male'    => $request->is_male
        ]);

        return redirect()->route('student_index');
    }
}
