<script src="jquery-1.12.4.js"></script>
<script>
	$.ajax({
        'url': "https://ipllin07.amdocs.com/rest/nphproxy.pl/000000A/http/lrt930s150m377:51000/rp-webapp-9-common/Login",
    	'data': JSON.stringify({"Credentials":{"user":"Asmsa1","password":"Asmsa1"}}),
	    'type': 'POST',
	    'crossDomain': true,
		'Accept': 'application/json',
		'dataType': 'jsonp',		
		'contentType': 'application/json'
	});
</script>
