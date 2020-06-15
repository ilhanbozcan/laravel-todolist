<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(){
        //return view('course');
        $course = DB::table('course') ->
            orderBy('course_must')
            ->get();

        //dd($course);
        return view('course')->with('course',$course);


        //$databaseName = DB::connection()->getDatabaseName();

        //dd($databaseName);



    }

    public function courseInsert(){
        return view('courseInsert');

    }

    public function courseInsertPost(Request $request){

        //From control
        $request ->validate([
            'course_title'=>'required',
            'course_content'=>'required',
            'course_must'=>'required',

        ]);
        //Insert
         $course = DB::table('course')->insert(
            [
            'course_title' => $request->course_title,
            'course_content' => $request->course_content,
            'course_must' => $request->course_must,
            ]
        );
         //DB check
        if(@$course){
            return back()->with('status','Registered');

        }


    }

}
