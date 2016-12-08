<?php
session_start();
?>
<html>
<title>POC Voice</title>
<script src="jquery-1.12.4.js"></script>
<script src="script.js"></script> 
<?php
error_reporting(0);
if ($_SESSION['login'] == "")
{
	header("location:login.php");	
}

include("menu.php");
?>
<body>
	
<div class="chat_window" style="margin-left:20px; float:left; display:none;">

<iframe frameborder="0" scrolling="no" width="420" height="390" src="https://php-web.herokuapp.com/iframe.php?access_token=abfbb042bf354b45965a4a3135f40224"></iframe>	
	
</div>

<div style="clear:both;"></div>
</body>
</html>
