<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    public function studentadd(Request $request)
    {
        $student = new Student;
        $student->sname = $request->input('sname');
        $student->email = $request->input('email');
        $student->courseone = $request->input('courseone');
        $student->coursetwo = $request->input('coursetwo');
        $student->save();
        return redirect()->back()->with('status','Student Added Successfully');
    }
}
