<html><head>
        <title>Greeting the User Test page</title>

        <script src="http://js.live.net/v5.0/wl.js" type="text/javascript"></script>
        <!--        http://isdk.dev.live.com/dev/isdk/ISDK.aspx?category=scenarioGroup_hotmail&index=0 -->
        <script type="text/javascript">
            
            var APPLICATION_CLIENT_ID = "000000004810309A",
                    REDIRECT_URL = "http://testserver.bscheme.com/bscheme_social_login/winlive/index.php";
            WL.Event.subscribe("auth.login", onLogin);
            WL.init({
                client_id: APPLICATION_CLIENT_ID,
                redirect_uri: REDIRECT_URL,
                scope: ["wl.signin", "wl.basic", "wl.birthday", "wl.emails"],
                response_type: "token"
            });

            WL.ui({
                name: "signin",
                element: "signInButton",
                brand: "hotmail",
                type: "connect"
            });

            function greetUser(session) {
                var strGreeting = "";
                WL.api(
                        {
                            path: "me",
                            method: "GET"
                        },
                function(response) {
                    // alert(response);
                    if (!response.error) {
                        console.log(response);
                        strGreeting = "Hi, " + response.first_name + "!";
                        document.getElementById("greeting").innerHTML = strGreeting;
                        document.getElementById("first_name").innerHTML = response.first_name;
                        document.getElementById("last_name").innerHTML = response.last_name;
                        document.getElementById("email").innerHTML = response.emails.preferred;
                        document.getElementById("gender").innerHTML = response.gender;
                        document.getElementById("birthday").innerHTML =
                                response.birth_month + " " + response.birth_day + " " + response.birth_year;
                    }
                });
            }

            function onLogin() {
                var session = WL.getSession();
                if (session) {
                    greetUser(session);
                }
            }
            function signUserOut() {
                WL.logout();
            }
            document.write("<a href='index.php' onclick='signUserOut()'>Click here to sign out!</a>");
        </script>
    </head>
    <body>
        <p>Connect to display a welcome greeting.</p>
        <div id="first_name"></div>
        <div id="last_name"></div>
        <div id="email"></div>
        <div id="gender"></div>
        <div id="birthday"></div>
        <div id="greeting"></div>
        <div id="signInButton"></div>
    </body>
</html>