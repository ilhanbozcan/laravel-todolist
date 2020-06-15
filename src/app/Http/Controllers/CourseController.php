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
            return back()->with('status','Added');

        }


    }

    public function courseUpdate($id){
        $course = DB::table('course')->
            where('id',$id)->
            first();

        //$course = DB::table('course')->
        //                  find($id);





        return view('courseUpdate',compact('course'));

    }

    public function courseUpdatePost(Request $request, $id){

        //From control
        $request ->validate([
            'course_title'=>'required',
            'course_content'=>'required',
            'course_must'=>'required',

        ]);
        //Insert
        $course = DB::table('course')->where('id',$id)
            ->update(
            [
                'course_title' => $request->course_title,
                'course_content' => $request->course_content,
                'course_must' => $request->course_must,
            ]
        );
        //DB check
        if(@$course){
            return back()->with('status','Updated');

        }


    }
    public function courseDelete($id){
        $delete = DB::table('course')->delete($id);

        if($delete){
            return back()->with('status','Deleted');

        }


    }



}
