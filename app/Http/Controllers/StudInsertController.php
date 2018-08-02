<?php

namespace App\Http\Controllers;

use DB;
use App\StudInsert;
use Illuminate\Http\Request;

class StudInsertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function insertform(){
           return view('stud_create');
           } 
      public function insert(Request $request){

        //Image Uploading code Start
          $file =$request->file("image");
            //It Give the full image Detail
           // echo "Image Name : ".$x->getClientOriginalName()."<br>";
           // echo "Extension : ".$x->getClientOriginalExtension()."<br>";
           // echo "RealPath : ".$x->getRealPath()."<br>";
           // echo "Size : ".$x->getSize()."<br>";
           // echo "Mime Type : ".$x->getMimeType()."<br>";
           //  die;

              if($request->hasFile("image"))
              {
                  $file = $request->file("image");
                  $file->move("upload/",$file->getClientOriginalName());
              }
             //end image code

           $first_name = $request->input('first_name');
           $last_name = $request->input('last_name');
           $city_name = $request->input('city_name');
           $email = $request->input('email');
           //$image = $request->input('$file->getClientOriginalName()');
           $image = $request->file('image')->getClientOriginalName();
          // die(input($file->getClientOriginalName()));
           $data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email,"image"=>$image);

           DB::table('student_details')->insert($data);
           echo "Record inserted successfully.<br/>";
           echo '<a href = "/insert">Click Here</a> to go back.';
            echo '<a href = "/view-records">Click Here</a> view records.';
        }
    public function index()
    {
        $users = DB::select('select * from student_details');
         return view('stud_view',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudInsert  $studInsert
     * @return \Illuminate\Http\Response
     */
    public function show(StudInsert $studInsert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudInsert  $studInsert
     * @return \Illuminate\Http\Response
     */
    public function edit(StudInsert $studInsert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudInsert  $studInsert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudInsert $studInsert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudInsert  $studInsert
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudInsert $studInsert)
    {
        //
    }
}
