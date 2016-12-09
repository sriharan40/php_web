<script src="jquery-1.12.4.js"></script>
<script>
	$.ajax({
		type: "POST",
        url: "http://ipllin07.amdocs.com/rest/nphproxy.pl/000000A/http/lrt930s150m377:51000/rp-webapp-9-common/Login",
		'Accept': 'application/json',
		'Content-Type': 'application/json',
        'Cache-Control': 'no-cache',
		'data': '{"Credentials":{"user":"Asmsa1","password":"Asmsa1"}}',
		success: function(data) {
		alert(data);	
		}
	});
</script>
