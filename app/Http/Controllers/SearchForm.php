<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchForm extends Controller
{
   public function showForm(){
    	return view('search');
    }
  public function search(Request $request){
        if($request->ajax())
        {
        	 $output   = "";
        	 $customer = DB::table('customer_search')->where('name','LIKE','%'.$request->search.'%') ->orWhere('lastname','LIKE','%'.$request->search.'%')->get();
        	 if($customer)
        	 {
        	 	foreach ($customer as $key => $customers) {
        	 		$output.='<tr>'.
        	 		         '<td>'.$customers->id.'</td>'.
        	 		         '<td>'.$customers->name.'</td>'.
        	 		         '<td>'.$customers->lastname.'</td>'.
        	 		         '<td>'.$customers->sex.'</td>'.
        	 		         '</tr>';
        	 	}

        	 	return Response($output);
        	 }
        }
  }
   
}
