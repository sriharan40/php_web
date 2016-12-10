<script src='jquery-1.12.4.js'></script>
<script>
var Credentials = {"user":"Asmsa1","password":"Asmsa1"};
	$.ajax({
	    'type': 'POST',
		'url': 'https://php-web.herokuapp.com/amdocs.php',
    	'data': JSON.stringify({"Credentials": Credentials}),
		'async': true,
		xhrFields: {
		   withCredentials: true
		},		
	    'crossDomain': true,
		'Accept': 'application/json',
		'contentType': 'application/json; charset=utf-8',
		'dataType': 'jsonp',
		success:function(){
                try{
                    alert("ok");
                }catch (e){
                    alert(e);
                }
            } 		
	});
</script>
