<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cruds;

class CrudSecond extends Controller
{
    public function showbyid(Cruds $post)
    {
         $post = Cruds::find($post);
        
          return view('crud.showbyid',compact('post'));
    }
}
