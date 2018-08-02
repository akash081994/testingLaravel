<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidation extends Controller
{
     public function myform()
     {
     	return view('validateForm');
     }

     public function submitmyform(Request $request)
     {

     	 $this->validate($request,[
             "firstname"=>"required",
             "lastname" =>"required|max:20|min:5",
             "email"    =>"required",
             "age"      =>"required"
             ],[ 
             "firstname.required"=>"name should be filled" //changing the error message

     	 	]);
     	 print_r($request->all());
     }


}
