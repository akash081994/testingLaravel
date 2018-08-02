<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   <form>
   	   <select id="arrival-time-list" onchange="ChangeSecondList(this.options[this.selectedIndex].value)" name="arrival">
<option value="">Select arrival time</option>
<option value="8:00am">8:00am</option>
<option value="8:15am">8:15am</option>
<option value="8:30am">8:30am</option>
<option value="8:45am">8:45am</option>
<option value="9:00am">9:00am</option>
<option value="9:15am">9:15am</option>
<option value="9:30am">9:30am</option>
<option value="9:45am">9:45am</option>
<option value="10:00am">10:00am</option>
<option value="10:15am">10:15am</option>
<option value="10:30am">10:30am</option>
<option value="10:45am">10:45am</option>
<option value="11:00am">11:00am</option>
<option value="11:15am">11:15am</option>
<option value="11:30am">11:30am</option>
<option value="11:45am">11:45am</option>
<option value="12:00pm">12:00pm</option>
<option value="12:15pm">12:15pm</option>
<option value="12:30pm">12:30pm</option>
<option value="12:45pm">12:45pm</option>
<option value="1:00pm">1:00pm</option>
<option value="1:15pm">1:15pm</option>
<option value="1:30pm">1:30pm</option>
<option value="1:45pm">1:45pm</option>
<option value="2:00am">2:00am</option>
<option value="2:15am">2:15am</option>
<option value="2:30pm">2:30pm</option>
<option value="2:45pm">2:45pm</option>
<option value="3:00pm">3:00pm</option>
<option value="3:15pm">3:15pm</option>
<option value="3:30pm">3:30pm</option>
<option value="3:45pm">3:45pm</option>
<option value="4:00pm">4:00pm</option>
<option value="4:15pm">4:15pm</option>
<option value="4:30pm">4:30pm</option>
<option value="4:45pm">4:45pm</option>
<option value="5:00pm">5:00pm</option>
<option value="5:15pm">5:15pm</option>
<option value="5:30pm">5:30pm</option>
<option value="5:45pm">5:45pm</option>
<option value="6:00pm">6:00pm</option>
<option value="6:15pm">6:15pm</option>
<option value="6:30pm">6:30pm</option>
<option value="6:45pm">6:45pm</option>
<option value="7:00pm">7:00pm</option>
</select>

<div id="static-list-div" style="display:block;">
<select>
<option>&#8679; Select an arrival time</option>
<option>&#8679; from the above dropdown.</option>
</select>
</div>

<div id="dynamic-list-div" style="display:none;">
<select id="dynamic-list" name="serving">
<option value=""></option>
<option value=""></option>
<option value=""></option>
</select>
</div>


   </form>

   <script type="text/javascript">
function ChangeSecondList(value)
{
   if( value.length )
   {
      document.getElementById("static-list-div").style.display = "none";
      document.getElementById("dynamic-list-div").style.display = "block";
      var dropid = document.getElementById("dynamic-list");
      var ta = value.split(":");
      var hour = parseInt(ta[0]);
      var minute = parseInt(ta[1].replace(/\D/g,""));
      var apm = ta[1].replace(/\d/g,"");
      for( var i=0; i<3; i++ )
      {
         minute += 15;
         if( minute > 59 )
         {
            hour++;
            minute -= 60;
            if( hour > 11 )
            {
               apm = apm.replace(/a/,'p');
               apm = apm.replace(/A/,'P');
            }
         }
         if( hour > 12 ) { hour -= 12; }
         if( minute < 10 ) { minute = "0"+minute; }
         var valuetext = hour + ":" + minute + apm;
         dropid.options[i].text = valuetext;
         dropid.options[i].value = valuetext;
         minute = parseInt(minute);
      }
      dropid.options[0].selected = true;
   }
   else
   {
      document.getElementById("static-list-div").style.display = "block";
      document.getElementById("dynamic-list-div").style.display = "none";
   }
}

ChangeSecondList(document.getElementById("arrival-time-list").options[document.getElementById("arrival-time-list").selectedIndex].value);
</script>



</body>
</html>