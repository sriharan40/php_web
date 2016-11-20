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
<h3><u>Send Message</u></h3>
<br />
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
$url = 'https://hitman507bot.herokuapp.com/?sender=918050582590&message='.$message.'&options='.$option.'';
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
$url = 'https://hitman507bot.herokuapp.com/?sender=918050582590&message='.$message.'';
file_get_contents($url);
}
}
echo "Message sent successfully.";
}	
?>
<br/><br />

<table>
<tbody>
<tr class="template" style="display:none;">
<td>Option(s)</td><td><input type="text" name="option[]" value="" size="28" /></td>
</tr>
</tbody>
</table>

<form method="POST" action="fb_campaign.php" name="form1">
<table cellspacing="0" cellpadding="10" border="1">
<tbody class="fb_content">
<tr>
<td>Message</td><td><textarea name="message" rows="5" cols="30" value=""></textarea></td>
</tr>
<tr>
<td>Option(s)</td><td><input type="text" name="option[]" value="" size="28" /></td>
</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="10" border="0" style="border:1px solid #333333; border-top:none;">
<tbody>
<tr>
<td><input type="button" class="add_option" value="Add Option" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit" /></td>
</tr>
</tbody>
</table>
</div>
<div style="clear:both;"></div>
</div>
</body>
</html>
