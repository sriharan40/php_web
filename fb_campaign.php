<?php
session_start();
?>
<html>
<title>Fb Campaign Message</title>
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
<?php
$message = $_POST["message"];
$option1 = $_POST["option1"];
$option2 = $_POST["option2"];

$message = str_replace(" ", "%20", $message);
$option1 = str_replace(" ", "%20", $option1);
$option2 = str_replace(" ", "%20", $option2);

if($message && $option1 && $option2)
{
$url = 'https://hitman507bot.herokuapp.com/?sender=8050582590&message='.$message.'&options='.$option1.','.$option2.'';
file_get_contents($url);	
echo "Message sent successfully.";
}

else if($message)
{
$url = 'https://hitman507bot.herokuapp.com/?sender=8050582590&message='.$message.'';
file_get_contents($url);	
echo "Message sent successfully.";
}	
?>
<br/><br />
<form method="POST" action="fb_campaign.php" name="form1">
<table cellspacing="0" cellpadding="10" border="1">
<tbody>
<tr>
<td>Message</td><td><textarea name="message" rows="5" cols="30" value=""></textarea></td>
</tr>
<tr>
<td>Option1</td><td><input type="text" name="option1" value="" size="28" /></td>
</tr>
<tr>
<td>Option2</td><td><input type="text" name="option2" value="" size="28" /></td>
</tr>
<tr>
<td>&nbsp;</td><td><input type="submit" value="Submit" /></td>
</tr>
</tbody>
</table>
</div>
</body>
</html>
