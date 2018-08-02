<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;

//

Route::get('insertdata','PostController@insdata');

// Route::get('/cars', 'CarsController@insertform');
// Route::post('insert','CarsController@insert');

Route::get('facebook', function () {
    return view('exampleFblogin');
});


//insert data
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert'); 

//retrive data
Route::get('view-records','StudInsertController@index'); 


Route::get('form','FormController@create');
Route::post('form','FormController@store'); //Uploading multiple image


//Form Validation Route
Route::get('myform','FormValidation@myform');
Route::post('submitform','FormValidation@submitmyform');

Route::get('searchDemo', function (){  //for searchbox
	return view('searchDemo');
});

Route::get('searchform','SearchForm@showForm');
Route::get('search','SearchForm@search');

//CRUD
Route::get('crudform','CrudsController@create');
Route::get('insert','CrudsController@show');
Route::get('showbyid/{post}','CrudSecond@showbyid');
Route::post('insert','CrudsController@save');
Route::get('{id}/edit','CrudsController@edit');
Route::post('update','CrudsController@update');
Route::get('{id}/delete','CrudsController@delete');
//CRUD finish

//Laravel Form
Route::get('laravelform','Controller@laravelForm');

Route::get('profile/{id?}','Controller@exampleProfileByID');
Route::get('test','Controller@test');


Route::get('realtimeval',function(){
	return view('runtimeValidation');
});


//Types of Display start
Route::get('displayexample',function(){
	//return view('displayExamples',['name'=>'Akash']);

	    //or

	//return view('displayExamples')->with('name','Developer');

	    //or

	  //$name = "Akash Gupta";

	//return view('displayExamples',['name'=>$name]);

	  //or

	// $name = "Developer";

	 //return view('displayExamples',compact('name'));

	   //or
      
      $tasks = [
          'Goto the store',
          'Finsih my screencast',
          'Clean the house'
      ];
	return view('displayExamples',compact('tasks'));
});

//End of Display

//Start select data By id
Route::get('/task',function()
{
   // $tasks = DB::table('_tasks')->latest()->get();

	  //or

	$tasks =App\Task::all();

     return view('task.tasks',compact('tasks'));
});

Route::get('/task/{task}',function($id)
{
	
    // $tasks = DB::table('_tasks')->find($id);

       //or

       $tasks = Task::find($id);
   

     return view('task.show',compact('tasks'));
});
//End select data by ID

Route::get('dropdown',function()
{
     return view('dropdownChanges');
});



Route::get('formvalid',function()
{
     return view('task.runtimevalidation');
});









