<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Subject;

class CourseList extends Controller
{
    public function index(){

        return view('frontend.studentUI');
    }


    public function courseList(){


        //  return addNewClassModel:: all();
  
         $files = Course :: all();
  
          return view('frontend.studentUI', ['files' => $files]);
      }


      public function classIndex(){


        return view('frontend.calenderUI');
      }
 

      public function classIndexShedule($course_id){

       
              $data = Subject :: Where('course_id',$course_id)->get();
        
              return view('frontend.calenderUI', compact('data'));  
                 
        
               
            }

            // SearchController 

            public function search(Request $request){
            
              $this-> validate($request,[
                'search' => 'required'
              ]);
            
              $search_txt = $request->search;

              $posts = Course:: orderBy('course_id','desc')->where('title','like','%'.$search_txt.'%')->get();

              
            return view ('frontend.search',compact('posts'));
            
            }


            public function searchStudent(Request $request){
            
              $this-> validate($request,[
                'search' => 'required'
              ]);
            
              $search_txt = $request->search;

              $posts = Subject:: orderBy('subject_id','desc')->where('title','like','%'.$search_txt.'%')->get();

              
            return view ('frontend.searchCourse',compact('posts'));
            
            }





}
