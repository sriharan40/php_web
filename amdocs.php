<script src="jquery-1.12.4.js"></script>
<script>
	$.ajax({
	    'type': 'POST',
		'url': "https://ipllin07.amdocs.com/rest/nphproxy.pl/000000A/http/lrt930s150m377:51000/rp-webapp-9-common/Login",
		'dataType': 'jsonp',		
    	'data': {"Credentials":{"user":"Asmsa1","password":"Asmsa1"}},
		'async': true,
		xhrFields: {
		   withCredentials: true
		},		
	    'crossDomain': true,
		'Accept': 'application/json',
		'contentType': 'application/json',
		success:function(){
                try{
                    alert("ok");
                }catch (e){
                    alert(e);
                }
            } 		
	});
</script>
