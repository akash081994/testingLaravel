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

  <h2>Edit form {{$edit->name}}</h2>
  <h2 style="text-align: right;"><a href="{{url('insert')}}">VIEW</a></h2>
        @if(session('message'))
           <p class="alert alert-success">{{session('message')}}</p>
        @endif
  <form action="{{url('/update')}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name="id" value="{{$edit->id}}">
    <div class="form-group">
        <label for="email">Firstname:</label>
        <input type="text" class="form-control" id="fnamei" placeholder="Enter firstname" name="fname" value="{{$edit->name}}">
      </div>
    <div class="form-group">
      <label for="des">Description:</label>
      <textarea class="form-control" id="des" placeholder="Enter Description" name="des"  >{{$edit->detail}}</textarea> 
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

