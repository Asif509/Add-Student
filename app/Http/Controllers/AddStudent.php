<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AddStudent extends Controller
{
    protected $students;
   public function addStudent()
   {
       return view('addStudent');
   }

   public function manageStudent ()
   {
       $this->students = Student::all();
       return view('manage', [
       'students' => $this->students,
            ]);
   }
    public function store(Request $request){
        Student::createStudent($request);
        return back()->with('success', 'Student Created Successfully.');
    }

    public function destroy ($studentId)
    {
        $this->student = Student::find($studentId);
        if (file_exists($this->student->image))
        {
            unlink($this->student->image);
        }
        $this->student->delete();
        return back()->with('success', 'Student deleted successfully');
    }
}
