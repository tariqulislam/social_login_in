function onLinkedInLoad() {
  $('a[id*=li_ui_li_gen_]').css({marginBottom:'20px'}).html('<img src="../images/LinkedIn-Button_zps1044accd.gif" height="90" width="90" border="0" />');
  IN.Event.on(IN, "auth", function() {onLinkedInLogin();});
  IN.Event.on(IN, "logout", function() {onLinkedInLogout();});
  
}

function onLinkedInLogout() {
  setLoginBadge(false);
}

function onLinkedInLogin() {
  // we pass field selectors as a single parameter (array of strings)
  IN.API.Profile("me")
    .fields(["id", "firstName", "lastName", "pictureUrl", "publicProfileUrl","email-address"])
    .result(function(result) {
      setLoginBadge(result.values[0]);
    })
    .error(function(err) {
      alert(err);
    });
}
// get and create the user information container//


