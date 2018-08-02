<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cruds;

class CrudsController extends Controller
{
    public function create(){
      return view('crud.form');
    }

    public function save(Request $request){
      $create = Cruds::create([
        'name'=>$request->fname,
        'detail'=>$request->des

       	]);

      if($create)
      {
      	 return redirect('crudform')->with('message','Post successfully added');
      }




       //This is a object method to insert the data by form
       // $crud = new Cruds;
       // $crud->name = $request->fname;
       // $crud->detail = $request->des;
       // $crud->save();
        
    }

    public function show()
    {
    	 $show = Cruds::all();
    	 return view('crud.show',compact('show'));
    }

    public function edit($id)
    {
       $edit = Cruds::find($id);

       return view('crud.edit',compact('edit'));
    }

    public function update(Request $request)
    {
        $update = Cruds::find($request->id);
        $update ->name = $request->fname;
        $update ->detail = $request->des;

      $updated =  $update -> save();
         if($updated)
         {
             return redirect('insert')->with('message','Post is successfully Updated');
         }

    }

    public function delete($id)
    {
        $del = Cruds::find($id);
        $delete = $del->delete();

        if($delete)
        {
           return redirect('insert')->with('message','Post is deleted successfully');
        }
    }

    
}


