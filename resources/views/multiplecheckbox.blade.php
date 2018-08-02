<form action="store" method="post">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

  <input type="checkbox" id="inlineCheckbox1" name="my_checkbox[]" value="option1"> 1
<input type="checkbox" id="inlineCheckbox2" name="my_checkbox[]" value="option2"> 2
<input type="checkbox" id="inlineCheckbox3" name="my_checkbox[]" value="option3"> 3

    <br>

    <label for=""></label>
    <input type="submit" name="submit" value="Submit">

</form>