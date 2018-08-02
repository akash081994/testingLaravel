 $(function(){
            $("#usernameErrorMessage").hide();
            $("#passwordErrorMessage").hide();

            var errorUserName = false;
            var errorPassword = false;


            $("#userid").focusout(function(){
                checkUserName();
            })

            $("#pwd").focusout(function(){
                checkPassword();
            })

            function checkUserName(){
              var userName_length = $("#userid").val().length;
              if(userName_length < 5 || userName_length >20){
                 $("#usernameErrorMessage").html("Should be between 5-20 character");
                 $("#usernameErrorMessage").show();
                 errorUserName = true;
              }
              else{
                   $("#usernameErrorMessage").hide();
              }
            }


            function checkPassword(){

                 var userpass = $("#pwd").val();
                 var userpassword = /^\d+$/;

                 if(!userpassword.test(userpass))
                 {
                     $("#passwordErrorMessage").html("Atleast one character");
                     $("#passwordErrorMessage").show();
                      errorPassword = true;
                     // alert("test");
                 }
                 else
                 {
                     $("#errorPassword").hide();
                 }
            }

                $("#formid").submit(function(){

                    errorUserName = false;
                    errorPassword = false;

                    checkPassword();
                    checkUserName();

                    if(errorUserName == false && errorPassword == false)
                    {
                       return true;
                    }
                    else
                    {
                       return false;
                    }



                });
         });