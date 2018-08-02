<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    @foreach($tasks as $task)
     <li> <a href="/task/{{$task->id}}">{{$task->body}}</a></li>
     @endforeach 

</body>
</html>