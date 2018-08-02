<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
      .error
        {
         color:red;
         font-family:verdana, Helvetica;
        }
	</style>

 
</head>
<body>
		    <form id="myform" >
		      <label>Please enter the number:</label>
		      <input id="txtNumber" name="txtNumber" type="text" />
					<br />
		      <input type="submit" name="submit" value="Submit">
		      <input class="cancel" type="submit" name="submit" value="Cancel">
		    </form>

		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>



	<script >
		$(document).ready(function()
		  {
		 var validator = $('#myform').validate(
		      {
		        rules:
		        {
		          txtNumber: {required:true,
		                      regex:true}
		        },
		        messages:
		        {
		          txtNumber: {required:"Please enter a number",
		                      regex: "Please enter only numbers"}          
		        },
		        errorPlacement: function(error, element) 
		        {
		            error.insertAfter( element );
		         }
		      });
		    
		    $.validator.addMethod(
		        "regex",
		        function(value, element, regexp) {
		            var re = new RegExp(regexp);
		            return this.optional(element) || re.test(value);
		        },
		        "Please check your input."
		);
		    
		    $("#txtNumber").rules("add", { regex: "^\\d{1,8}$" })
		    
		    $('#txtNumber').keyup(function(){
		      validator.submitted["txtNumber"]="Please enter only numbers upto 8 digits";
		    });
		  });
	</script>	
</body>
</html>