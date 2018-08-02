<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = '_tasks';

    public  function isComplete(){
    	 return false;
    }

}
