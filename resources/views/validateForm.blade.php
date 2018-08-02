
    @if($errors->any())
      @foreach($errors->all() as $error)
        <p>{{$error}} </p>
      @endforeach
    @endif
<form method="post" action="submitform">
{{csrf_field()}}
  First name:<br>
  <input type="text" name="firstname" value="{{old('firstname')}} ">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="{{old('lastname')}}">
  <br><br>
  Email:<br>
  <input type="text" name="email" value="{{old('email')}}">
  <br><br>
  Age:<br>
  <input type="text" name="age" value="{{old('age')}}">
  <br><br>
  <input type="submit" value="Submit">
</form> 