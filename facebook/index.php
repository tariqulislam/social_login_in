<html>
<head></head>
<body>
<div id="fb-root"></div>
<!-- @see: https://developers.facebook.com/docs/facebook-login/getting-started-web/-->
<script>
    
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '156540967883799',//https://developers.facebook.com/apps/156540967883799/summary
    channelUrl : 'http://testserver.bscheme.com/bscheme_social_login/facebook/channel.html',
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

 
  FB.Event.subscribe('auth.authResponseChange', function(response) {
   
    if (response.status === 'connected') {
     
      testAPI();
    } else if (response.status === 'not_authorized') {
      
      FB.login(function(){},{scope:"email"});
    } else {
     
      FB.login(function(){},{scope:"email"});
    }
  });
  };

  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "https://connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  // Here we run a very simple test of the Graph API after login is successful. 
  // This testAPI() function is only called in those cases. 
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      //console.log(response);
     alert('Good to see you, ' + response.name + '.');
       alert('Good to see you, ' + response.email + '.');
    });
  }
</script>
<fb:login-button scope="email"  show-faces="false" width="200" max-rows="1"></fb:login-button>
</body>
</html>

<!--function fbLogout(){
    if(typeof FB.logout == 'function'){
        if (FB.getAuthResponse()) {
         FB.logout(function(response) { window.location.href = PROJECT_PATH + '/index/logout'; }); 
         return;
        }  
    };

    window.location.href = PROJECT_PATH + '/index/logout'; 
    return;  
}-->