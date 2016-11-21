<?php
session_start();
?>
<html>
<title>Fb Campaign Message</title>
<script src="jquery-1.12.4.js"></script>
<script>
$(document).ready(function (){
$(".add_option").click(function (){
$( ".template" ).clone().removeClass("template").show().appendTo( ".fb_content" );	
});
});
</script>
<body style="margin:0 auto;">
<?php
error_reporting(0);
if ($_SESSION['login'] == "")
{
header("location:login.php");	
}
include("menu.php");
?>
<div id="content">
<?php
$message = $_POST["message"];
$option = $_POST["option"];

$message = str_replace(" ", "%20", $message);
$message = str_replace("?", "%3F", $message);
$option = str_replace(" ", "%20", $option);
$option = str_replace(" ", "%3F", $option);

$option = implode(",",$option);

if($message && $option)
{
$url1 = "https://paypal-payout.herokuapp.com";
$data = file_get_contents($url1);
$arr = json_decode($data, true);
foreach($arr as $child) {
foreach($child as $child1) {
$url = 'https://hitman507bot.herokuapp.com/?sender=8050582590&message='.$message.'&options='.$option.'';
file_get_contents($url);
}
}
echo "Message sent successfully.";
}

else if($message)
{
$url1 = "https://paypal-payout.herokuapp.com";
$data = file_get_contents($url1);
$arr = json_decode($data, true);
foreach($arr as $child) {
foreach($child as $child1) {	
$url = 'https://hitman507bot.herokuapp.com/?sender=8050582590&message='.$message.'';
file_get_contents($url);
}
}
echo "Message sent successfully.";
}	
?>
<br/><br />

<table width="420px;" cellspacing="0" cellpadding="10" border="0">
<tbody>
<tr style="background-color:#ffffff; display:none;" class="template">
<td>Option(s)</td><td><input type="text" name="option[]" value="" size="28" /></td>
</tr>
</tbody>
</table>

<form method="POST" action="fb_campaign.php" name="form1">
<table bgcolor="#ffffff" width="420px" style="border:0px solid #333333; border-top-left-radius:15px; border-top-right-radius:15px;" cellspacing="10" cellpadding="10" border="0">
<tbody class="fb_content">
<tr>
<td>Message</td><td><textarea name="message" rows="5" cols="42" value=""></textarea></td>
</tr>
<tr style="background-color:#ffffff;">
<td>Option(s)</td><td><input type="text" name="option[]" value="" size="28" /></td>
</tr>
</tbody>
</table>
<table bgcolor="#ffffff" width="443px" cellspacing="10" cellpadding="10" border="0" style="border:0px solid #333333; border-bottom-left-radius:15px; border-bottom-right-radius:15px; border-top:none;">
<tbody>
<tr>
<td><input style="width:47%; padding-left:43px; float:left; text-align:center;" type="button" class="add_option btn" value="Add Option" />&nbsp;&nbsp;<input style="width:47%; float:left; margin-left:10px;" type="submit" class="btn" value="Submit" /></td>
</tr>
</tbody>
</table>
</div>
<div style="clear:both;"></div>
</div>
</body>
</html>
