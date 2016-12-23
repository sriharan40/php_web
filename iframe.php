<style>
body {
    background: #EEE;
    padding:15px;	
    overflow-x: hidden;
    font-size: 16px;
    font-family: 'Open Sans', sans-serif;
}

::-webkit-scrollbar { 
    display: none; 
}
</style>
<script src="jquery-1.12.4.js"></script>
<script>
var accessToken = "<?php echo $_GET["access_token"]; ?>";
var baseUrl = "https://api.api.ai/v1/";
$(document).ready(function() {
setTimeout(function() {
$(".chat_window").css("display","block");
//sendFBauto();
}, 0);
		
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
		if(text.match(/^[\(\)\s\-\+\d]{10,17}$/))
		{
		text = text.replace(/\D/g,'');
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
data: access=1;
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
	$("#rec").attr('src', recognition ? "mike_active.png" : "mike.png");
}

//CHECK HIMANT TEXT TO SPEECH
    function respond(val) {
        var msg = new SpeechSynthesisUtterance();
        msg.voiceURI = "native";
        msg.text = val;
        msg.lang = "en-US";
        window.speechSynthesis.speak(msg);
    }
// CHECK ENDS


function send() {
	var text = $("#input").val();
	setResponse("<p align='right' style='color:blue;'>"+text+"</p>\n");
	$.ajax({
		type: "POST",
        	url: baseUrl + "query?v=20150910",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		headers: {
			"Authorization": "Bearer " + accessToken,
			"Accept-Language": "en-US"						
		},
		data: JSON.stringify({ query: text, lang: "en", sessionId: "somerandomthing" }),
		success: function(data) {
			console.log("Data:"+data);
			setResponse(data['result']['fulfillment'].speech);
			respond(data['result']['fulfillment'].speech);
			
		},
		error: function() {
			setResponse("Internal Server Error");
		}
	});
	//setResponse("Loading...");
}
  
function setResponse(val) {
	$("#response").append(val+"\n");
	var objDiv = document.getElementById("response");
	objDiv.scrollTop = objDiv.scrollHeight;	
}
</script>
<div style="background-color:#ffffff; border:1px solid #aaaaaa; border-bottom:none; width:99%;">			
<p style="width:100%; padding:10px; padding-left:0px; padding-right:0px; color:#fff; max-width:100%; margin-top:0px;  background-color:#333;">&nbsp;&nbsp;&nbsp;&nbsp;Voice help desk</p>
<div id="response" style="padding:20px; padding-top:5px;  height:65%; width:93%; overflow:auto;"></div>	
</div>
<input size="30" style="width:99%; padding:10px; float:left; border: 1px solid #575757;" id="input" type="hidden"> <img src="mike.png" width="36" style="cursor:pointer; position: absolute; bottom: 0px; right: -30px; cursor: pointer; width: 110px;" id="rec" />
