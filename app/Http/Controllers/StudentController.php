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
    public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('student.edit', compact('student'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
    ]);

    $student = Student::findOrFail($id);
    $student->update($request->all());

    return redirect()->route('student_show')->with('success', 'Student updated successfully.');
}

function delete_record($id){

    Student::destroy($id);

    return back();
}
function edit_record($id)
{
     $student = Student::find($id);
    
     return view('student.edit', compact('student'));


}

function update_student(Request $request, $id)
{
    $student = Student::find($id);

    $student->first_name = $request->first_name;
    $student->last_name = $request->last_name;
    $student->is_male = $request->is_male;
    
    $student->save();
     
    return redirect()->route('student_show');


}
}