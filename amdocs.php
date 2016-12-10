<script src="jquery-1.12.4.js"></script>
<script>
	$.ajax({
		'type': 'POST',
        'url': "rest/nphproxy.pl/000000A/http/lrt930s150m377:51000/rp-webapp-9-common/Login",
		//'url': 'https://ipllin07.amdocs.com/',
		'Accept': 'application/json',
		//headers: {
		'Content-Type': 'application/json',
        'Cache-Control': 'no-cache',
		//},
		{"Credentials":{"user":"Asmsa1","password":"Asmsa1"}}
		success: function(data) {
		alert(data);	
		}
	});
</script>
