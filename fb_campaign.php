<?php
session_start();
?>
<html>
<title>Fb Campaign Message</title>
<body style="margin:0 auto;">
<style>
 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
 table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
ol li{	
padding:5px;
padding-left:0px;	
}
</style>
<?php
error_reporting(0);
if ($_SESSION['login'] == "")
{
	header("location:login.php");	
}
?>
<div style="float:left; width:200px;  padding-left:20px; border-right:1px solid #333333; height:100%;">
<?php
include("menu.php");
?>
</div>
<div style="float:left; padding-left:20px;">
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
