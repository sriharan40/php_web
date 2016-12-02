var accessToken = "abfbb042bf354b45965a4a3135f40224";
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
			respond(data['result']['fulfillment'].speech);
			
		},
		error: function() {
			setResponse("Internal Server Error");
		}
	});
	//setResponse("Loading...");
}

//CHECK HIMANT TEXT TO SPEECH
function respond(val) {
      if (val == "") {
        val = messageSorry;
      }
      if (val !== messageRecording) {
        var msg = new SpeechSynthesisUtterance();
        msg.voiceURI = "native";
        msg.text = val;
        msg.lang = "en-US";
        window.speechSynthesis.speak(msg);
      }
      $("#spokenResponse").addClass("is-active").find(".spoken-response__text").html(val);
    }


// CHECK ENDS

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
