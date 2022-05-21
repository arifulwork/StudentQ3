<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Course;
use App\Models\Subject;

class StudentController extends Controller
{
    public function firstreservation()
    {
        return view('frontend.studentSelectOne');
    }

    

    public function studentadd(Request $request)
    {
        $student = new Student;
        $student->sname = $request->input('sname');
        $student->email = $request->input('email');
        $student->courseone = $request->input('courseone');
        $student->subject_id  = $request->input('subject_id');

       
        $student->save();
        return redirect()->back()->with('status','Done');
    }


    public function testfunction(){

        

        $datas = Subject :: all();
  
        return view('frontend.studentSelectOne', ['datas' => $datas]);
        

     }


}
