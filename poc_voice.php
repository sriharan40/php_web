<?php
session_start();
?>
<html>
<title>Add Top Offers</title>
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

<div class="chat_window" style="margin-left:20px; float:left; display:none;">

<div style="background-color:#ffffff; border:1px solid #aaaaaa; border-bottom:none; width:275px;">			
<p style="width:255px; padding:10px; color:#fff; margin-top:0px;  background-color:#333;">
	Voice help desk</p><div id="response" style="padding:20px;padding-top:5px;  height:170px;width:235px;  overflow:auto;"></div>	
	</div>
<input size="26" style="width:278px; border-top: 1px solid #575757;" id="input" type="text"> <button id="rec">Speak</button>

<iframe frameborder="0" scrolling="no" width="420" height="390" src="https://php-web.herokuapp.com/iframe.php?access_token=abfbb042bf354b45965a4a3135f40224"></iframe>	
	
</div>
	
</div>

<div style="clear:both;"></div>
</body>
</html>
