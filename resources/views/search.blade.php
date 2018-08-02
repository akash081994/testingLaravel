<!DOCTYPE html>
<html>
<head>
	<title>Search</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="form-group" >
  	<input type="text" name="search" id="searchi">

  </div>

  <table class="table table-bordered table-hover" >
  	 <thead>
  	 	 <tr>
  	 	 	<th>ID</th>
  	 	 	<th>Firstname</th>
  	 	 	<th>Lastname</th>
  	 	 	<th>Sex</th>
  	 	 	<th>Email</th>
  	 	 	<th>Phone</th>
  	 	 </tr>
  	 </thead>
  	  <tbody>
  	  	
  	  </tbody>
  </table>

  <script >
  	 $('#searchi').on('keyup',function(){
  	 	  $value=$(this).val();
  	 	   $.ajax({
  	 	  	   type : 'get',
  	 	  	   url  :  '{{URL::to('search')}}',
  	 	  	   data : {'search':$value},
  	 	  	   success : function(data){
  	 	  	   	 $('tbody').html(data);
  	 	  	   }
  	 	  });
  	 })
  </script>

</body>
</html>