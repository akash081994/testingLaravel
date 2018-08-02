<!DOCTYPE html>
<html>
<head>
	<title></title>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '450935988653982',
      cookie     : true,
      xfbml      : true,
      version    : '{latest-api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));



    function checkLoginState() {
       FB.getLoginStatus(function(response) {
       statusChangeCallback(response);
    });
   }

       function statusChangeCallback(response) {
              FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
       }
</script>
</head>
<body>
 <h1>FaceBook Login</h1>

 <fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>

</body>
</html>