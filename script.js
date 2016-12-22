var accessToken = "";    
$.ajax({
		type: "POST",
        url: "config.php",		
data: {access : "1"},																					
  success : function(msg){		
		  accessToken=msg;     		
}							
});
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
		text = text.replace(/\D/g, "");
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
	$("#rec").text(recognition ? "Stop" : "Speak");
}

//CHECK HIMANT TEXT TO SPEECH
    function respond(val) {
    //  if (val == "") {
    //    val = messageSorry;
    //   }

      //if (val !== messageRecording) {
        var msg = new SpeechSynthesisUtterance();
        msg.voiceURI = "native";
        msg.text = val;
        msg.lang = "en-US";
        window.speechSynthesis.speak(msg);
     // }
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
  
function sendauto() {
	var text = "StuckInAddNewOffer";
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
			setResponse(data['result']['fulfillment'].speech+"\n");
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
