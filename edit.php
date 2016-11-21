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
	}
	function updateRec() {
		$("#rec").text(recognition ? "Stop" : "Speak");
	}
	function send() {
		var text = $("#input").val();
   	    setResponse(text+"\n");
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
</head>
<body style="margin:0 auto;">
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
<textarea id="response" cols="40" rows="10"></textarea>
<br />
<input size="26" id="input" type="text"> <button id="rec">Speak</button>
</div>

</div>
<div style="clear:both;"></div>
</div>
</body>
</html>
