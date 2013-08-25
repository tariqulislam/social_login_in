<html>
    <head><title>
        </title>
     <script type="text/javascript" src="jquery.min.js" ></script>
     
    </head>
    <body>
        <div id="Login_container"
        <!--Start Linkedin social login-->
        <script type="text/javascript" src="http://platform.linkedin.com/in.js">
                api_key: mezzzlyucjjv
                onLoad: onLinkedInLoad
       </script>
       <script type="text/javascript" src="linkedin/linkedin.js"></script>
       <!-- need to be logged in to use; if not, offer a login button -->
        <script type="IN/Login"></script>

        <div id="loginbadge">
          <p>Login badge renders here if the current user is authorized.</p>
        </div>
        <!--End Linkedin social login-->
        
    <!--        start yahoo sign in -->
             <span id="login"> </span>
            
            <script type="text/javascript" src="http://yui.yahooapis.com/3.11.0/build/yui/yui-min.js"></script>
            <script type="text/javascript" src="yahoo/yui-login.js"></script>
            <script type="text/javascript">
            YUI().use('login', function(Y) {            
                Y.login.renderLoginButton('login');
            });
            </script>
            
    <!--        End yahoo sign in -->
    
    <!--  Start wind Live social login -->
    <script src="http://js.live.net/v5.0/wl.js" type="text/javascript"></script>
    <script src="winlive/winlive.js" type="text/javascript"></script>
   
       <p>Connect to display a welcome greeting.</p>
        <div id="first_name"></div>
        <div id="last_name"></div>
        <div id="email"></div>
        <div id="gender"></div>
        <div id="birthday"></div>
        <div id="greeting"></div>
         
        
  <div id="signInButton"></div>
   
    <!--  End wind Live social login -->
    <!--     start Twitter social login   -->
    <script type="text/javascript" src="twitter/sha1.js"></script>
    <script type="text/javascript" src="twitter/codebird.js"></script>
    <script type="text/javascript" src="twitter/twitter.js"></script>

    <input type="image" src="images/twitter.png" style="height:90px;width:90px;"  onclick="TwitterLogin();" />

    <div id="tuserinfo"></div>
    <!--     End Twitter social login   -->
    
<!--      Start google login-->
  <!--Add a button for the user to click to initiate auth sequence -->
        <input type="image" src="images/google.jpg" style="height:90px;width:90px;" id="authorize-button" />
        <script type="text/javascript" src="google/google.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
        <div id="authContent"></div>
        <div id="content"></div>
      
<!--      End google login-->
<!--  Start facebook login -->
<div id="fb-root"></div>
<script type="text/javascript" src="facebook/facebook.js"></script>
<fb:login-button scope="email"  show-faces="false" width="200" max-rows="1"></fb:login-button>
<div id="fbUser" ></div>
<!--  End facebook login -->
   
    </body>
</html>
