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
    	    <div class="col-sm-12">
           <h2 style="text-align: right;"><a href="{{url('insert')}}">VIEW</a></h2>
            <h2 style="text-align: right;"><a href="{{url('crudform')}}">ADD</a></h2>

    	    @foreach($post as $posts)
    	    	   <article>
    	    	   <h2 style="color: red">Name:</h2>
    	    	   	  <h2>{{$posts->name}}</h2>
    	    	   	<p style="color: blue">Description</p>  
    	    	   	  <p>{{$posts->detail}}</p>
    	    	   </article>
             @endforeach  

    	    	
    	    </div>

    	     
  	 
    		
    	</div>
    </div>

 </body>
</html>