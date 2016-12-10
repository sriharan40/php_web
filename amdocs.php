<script type='text/javascript' src='jquery-1.12.4.js'></script>
<script>
var Credentials = {"user":"Asmsa1","password":"Asmsa1"};
	$.ajax({
		url: 'http://ipllin07.amdocs.com/rest/nphproxy.pl/000000A/http/lrt930s150m377:51000/rp-webapp-9-common/Login',
	    method: "POST",
    	data: JSON.stringify({"Credentials": Credentials}),
		dataType: "json",
		contentType: "application/json; charset=utf-8",
	    crossDomain: true,
		Accept: 'application/json',
		success:function(){
                try{
                    alert("ok");
                }catch (e){
                    alert(e);
                }
            } 		
	});
</script>
