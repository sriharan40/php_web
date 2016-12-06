<?php
session_start();
?>
<html>
<title>Add Top Offers</title>
<script src="jquery-1.12.4.js"></script>
<script src="script.js"></script> 
<?php
error_reporting(0);
if ($_SESSION['login'] == "")
{
	header("location:login.php");	
}

include("menu.php");
?>
<!-- CHAT WITH FB OPTION -->
<body style="margin:0 auto;">
<!-- <script>
var uid = 0; 
window.fbAsyncInit = function() {
FB.init({
    appId      : '312339728800370',
    status     : true,
    xfbml      : true,
    cookie: true,
    version    : 'v2.6' // or v2.6, v2.5, v2.4, v2.3
  });

FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    // the user is logged in and has authenticated your
    // app, and response.authResponse supplies
    // the user's ID, a valid access token, a signeda@pppppqqu
    // request, and the time the access token 
    // and signed request each expire
 /* FB.api('/me', function(response){
        alert ("Welcome " + response.name + ": Your UID is " + response.id); 
    }); */
	
    uid = response.authResponse.userID;
    var accessToken = response.authResponse.accessToken;
    // alert("Login status:" + JSON.stringify(response));
  } else if (response.status === 'not_authorized') {
    // the user is logged in to Facebook, 
    // but has not authenticated your app
	 FB.login();
  } else {
    // the user isn't logged in to Facebook.
  }
		     
 });
FB.Event.subscribe('auth.statusChange', function(response) {
  // do something with response
	//alert(JSON.stringify(response));
	//alert("Login needed");  
});

FB.Event.subscribe('send_to_messenger', function(response) {	
	var accessToken = "c743619629b2490fab9751dac552094a";
	var baseUrl = "https://api.api.ai/v1/";
	var text = "StuckInAddNewOffer";
	$.ajax({
		type: "POST",
		url: baseUrl + "query?v=20150910",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		headers: {
			"Authorization": "Bearer " + accessToken
		},
		data: JSON.stringify({ query: uid, lang: "en", sessionId: "somerandomthing" }),
		success: function(data) {
			alert(data['result']['fulfillment'].speech);
			//setResponse(data['result']['fulfillment'].speech+"\n");
		},
		error: function() {
			//setResponse("Internal Server Error");
		}
	});	
if ( response.event == 'clicked' ) {
/*	$.ajax({
	  "dataType": "json",
	  "contentType": "application/json",
	  "url": "https://graph.facebook.com/v2.6/me/messages?access_token=EAAEcEkKVmnIBAPVZAKS2lNccsxPgL13xL3JF2FFzZA09wxm55At7rrit8ZCDZADZCJc8WRe1U06c4iqUWWFkj50mmYZCBGqaZCZCV4bTYv2ThSKUBTal4hvIRuODElTZCGjeF2j2nASoyWWgy1tXkmk5fVZCfdsXUec6efGZAnv4KZAP1QZDZD",
      "method": "POST",
      data: JSON.stringify({
        "recipient": {
			//"user_ref": "<?php //echo $user_ref; ?>"
			"id": uid
		},
        "message": {
			"text":"StuckInAddNewOffer",
			}
      }),
	  success: function(data) {
		console.log(data);		  
	  },
	  error: function(e) {
		console.log(e);
	  }
		}); */	    
	
          // callback for events triggered by the plugin
          //  window.top.location = 'https://www.messenger.com/t/himantmusic/';
    };
      });
};

(function(d, s, id){
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

	// CHECK ENDS
	// CHECK GRAPH CALL

</script>-->

<div id="content">
<form method="POST" action="index.php" name="form1">
<table cellspacing="0" cellpadding="10">
<tbody>
<tr>
<td>Offer Name</td><td><input type="text" name="offer_name" value="" /></td>
</tr>
<tr>
<td>Description / Link</td><td><input type="text" name="link" value="" /></td>
</tr>
<tr>
<td>&nbsp;</td><td><input type="submit" value="Submit" /></td>
</tr>
</tbody>
</table>
</form>

<div class="chat_window" style="margin-left:20px; float:left; display:none;">

<!--<div style="float:left;">
	<div style="background-color:#ffffff; border:1px solid #aaaaaa; border-bottom:none; width:275px;">			
<p style="width:255px; padding:10px; color:#fff; margin-top:0px;  background-color:#333;">
	Voice help desk</p><div id="response" style="padding:20px;padding-top:5px;  height:170px;width:235px;  overflow:auto;"></div>	
	</div>
<input size="26" style="width:278px; border-top: 1px solid #575757;" id="input" type="text"> <button id="rec">Speak</button>
</div>-->

<iframe frameborder="0" scrolling="no" width="420" height="390" src="https://php-web.herokuapp.com/iframe.php?access_token=abfbb042bf354b45965a4a3135f40224"></iframe>	
	
</div>
	
 
<!-- <div style="margin-left:20px;" class="fb-page" 
	 data-href="https://www.facebook.com/himantmusic/" 
	 data-tabs="messages" 
	 data-width="340" 
	 data-height="300" 
	 hide_cover="true"
	 data-small-header="true">
<div class="fb-xfbml-parse-ignore">
<blockquote></blockquote>
</div>
</div> -->

<!--<div class="fb-messenger-checkbox"  
  origin="https://php-web.herokuapp.com/edit.php"
  page_id="165157840188738"
  messenger_app_id="312339728800370"
  user_ref="Yes" 
  prechecked="true" 
  allow_login="true" 
  size="large"></div>  -->
  
<!-- <div class="fb-send-to-messenger" style="float:right; margin-left:40px;" 
          messenger_app_id="312339728800370" 
		  page_id="165157840188738" 
		  data-ref="StuckInAddNewOffer" 
		  color="blue" 
		  size="standard">
</div> -->

<!-- <div class="fb-send-to-messenger" messenger_app_id="312339728800370" page_id="165157840188738" data-ref="StuckInAddNewOffer" color="blue" size="standard"></div> -->
  
</div>

<div style="clear:both;"></div>
</body>
</html>
