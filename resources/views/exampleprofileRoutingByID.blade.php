<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  {{print_r($users)}}
  <br>

  <!-- or -->

@foreach($users as $user)
     {{$user}}.<br>
  @endforeach


  
</body>
</html>