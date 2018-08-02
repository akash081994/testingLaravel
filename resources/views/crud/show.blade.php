<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
    	<div class="row">
      <br><br>
      <div class="col-sm-12">
          @if(session('message'))
             <p class="alert alert-danger">{{session('message')}}</p>
          @endif
      </div>
    	    <div class="col-sm-12">

           <a  href="{{url('crudform')}}" class="btn btn-info">Add</a>
            

    	    	 @foreach($show as $post)
    	    	
    	    	   <article>
    	    	   <h2 style="color: red">Name:</h2>
    	    	   	  <h3><a href="{{url('showbyid/'.$post->id)}}">{{$post->name}}</a></h3>

    	    	   	<p style="color: blue">Description</p>  
    	    	   	  <p>{{$post->detail}}</p>
                  <a href="{{url($post->id.'/edit')}}" class="btn btn-primary">Edit</a>
                   <a href="{{url($post->id.'/delete')}}" class="btn btn-danger">Delete</a>
    	    	   </article>

    	    	 @endforeach

    	    </div>

    	     
  	 
    		
    	</div>
    </div>

 </body>
</html>