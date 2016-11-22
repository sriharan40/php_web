<?php
session_start();
?>
<html>
<title>Add Top Offers</title>
<script src="jquery-1.12.4.js"></script>
<script type="text/javascript">
	var accessToken = "c743619629b2490fab9751dac552094a";
	var baseUrl = "https://api.api.ai/v1/";
	$(document).ready(function() {

	setTimeout(function() {
	$(".chat_window").css("display","block");
	sendauto();
	}, 5000);
			
	$("#input").keypress(function(event) {
			if (event.which == 13) {
				event.preventDefault();
				send();
				$("#input").val("");
			}
		});
		$("#rec").click(function(event) {
			switchRecognition();
		});
	});
	var recognition;
	function startRecognition() {
		recognition = new webkitSpeechRecognition();
		recognition.onstart = function(event) {
			updateRec();
		};
		recognition.onresult = function(event) {
			var text = "";
			for (var i = event.resultIndex; i < event.results.length; ++i) {
				text += event.results[i][0].transcript;
			}
			setInput(text);
			stopRecognition();
		};
		recognition.onend = function() {
			stopRecognition();
		};
		recognition.lang = "en-US";
		recognition.start();
	}

	function stopRecognition() {
		if (recognition) {
			recognition.stop();
			recognition = null;
		}
		updateRec();
	}
	function switchRecognition() {
		if (recognition) {
			stopRecognition();
		} else {
			startRecognition();
		}
	}
	function setInput(text) {
		$("#input").val(text);
		send();
		$("#input").val("");
	}
	
	function updateRec() {
		$("#rec").text(recognition ? "Stop" : "Speak");
	}
	function send() {
		var text = $("#input").val();
   	    setResponse("<p align='right' style='color:blue;'>"+text+"</p>\n");
		$.ajax({
			type: "POST",
			url: baseUrl + "query?v=20150910",
			contentType: "application/json; charset=utf-8",
			dataType: "json",
			headers: {
				"Authorization": "Bearer " + accessToken
			},
			data: JSON.stringify({ query: text, lang: "en", sessionId: "somerandomthing" }),
			success: function(data) {
				setResponse(data['result']['fulfillment'].speech);
			},
			error: function() {
				setResponse("Internal Server Error");
			}
		});
		//setResponse("Loading...");
	}
	
	function sendauto() {
		var text = "StuckInAddNewOffer";
		$.ajax({
			type: "POST",
			url: baseUrl + "query?v=20150910",
			contentType: "application/json; charset=utf-8",
			dataType: "json",
			headers: {
				"Authorization": "Bearer " + accessToken
			},
			data: JSON.stringify({ query: text, lang: "en", sessionId: "somerandomthing" }),
			success: function(data) {
				setResponse(data['result']['fulfillment'].speech+"\n");
			},
			error: function() {
				setResponse("Internal Server Error");
			}
		});
		//setResponse("Loading...");
	}
	
	function setResponse(val) {
		$("#response").append(val+"\n");
	}
</script>
<body style="margin:0 auto;">
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '312339728800370',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
  <div class="fb-send-to-messenger" 
  messenger_app_id="312339728800370" 
  page_id="165157840188738" 
  data-ref="PASS_THROUGH_PARAM" 
  color="blue" 
  size="standard">
</div> 
<?php
error_reporting(0);
if ($_SESSION['login'] == "")
{
	header("location:login.php");	
}
?>
<?php
include("menu.php");
?>
<!-- CHAT WITH FB OPTION -->

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

<div class="chat_window" style="margin-left:20px; display:none;">
<div id="response" style="background-color:#ffffff; overflow:auto; border:1px solid #aaaaaa; border-bottom:none; padding:20px; width:255px; height:170px;"></div>
<input size="26" id="input" type="text"> <button id="rec">Speak</button>
</div>
</div>

<div style="clear:both;"></div>
</body>
</html>
