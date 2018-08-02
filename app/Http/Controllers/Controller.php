<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function laravelForm()
     {
     	 return view('crud.laravelForm');
     }

     public function exampleProfileByID($id=1)
     {
     	  $user = array('Akash Gupta','Developer','Hestabit Technologies');
     	  return view('exampleprofileRoutingByID',['users'=>$user]);
     }



     public function test()
     {
          return view('runtimeValidation');
     }

}
