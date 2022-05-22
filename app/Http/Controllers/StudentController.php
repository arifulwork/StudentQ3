<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Stud;
use DB;

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

     public function kitter(Request $request)
     {
      if($request->get('email'))
      {
       $email = $request->get('email');
       $data = DB::table("students")
        ->where('email', $email)
        ->count();
       if($data > 0)
       {
        echo 'not_unique';
       }
       else
       {
        echo 'unique';
       }
      }
     }


     /*Second Student Reservation Added */

     public function secondreservtion()
    {
        return view('frontend.studentSelectTwo');
    }

    
    public function testfunctionw(){

        

        $datass = Subject :: all();
  
        return view('frontend.studentSelectTwo', ['datass' => $datass]);
        

     }


     

     public function kitters(Request $request)
     {
      if($request->get('email'))
      {
       $email = $request->get('email');
       $data = DB::table("secondstudents")
        ->where('email', $email)
        ->count();
       if($data > 0)
       {
        echo 'not_unique';
       }
       else
       {
        echo 'unique';
       }
      }
     }


     /* Second Time Register */


     public function secondstudentadd(Request $request)
    {
        $secondstudent = new Stud;
        $secondstudent->sname = $request->input('sname');
        $secondstudent->email = $request->input('email');
        $secondstudent->coursetwo = $request->input('coursetwo');
        $secondstudent->subject_id  = $request->input('subject_id');

        $secondstudent->save();
        return redirect()->back()->with('status','Done');
    }




}
