<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function insdata()
    {

    $post = new Post;

    $post ->name = "akash";
    $post ->description = "Hello I am Akash";
    $post ->age ="24";
    $post ->save();
    echo "inserted";

   }
   
    
}
