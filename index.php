<?php
session_start();
?>
<html>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Top Offers List</title>
<body style="margin:0 auto;">
<style>
</style>
<?php
error_reporting(0);
if ($_SESSION['login'] == "")
{
	header("location:login.php");	
}
$id = $_GET["id"];
$offer_name = $_POST["offer_name"];
$offer_name = str_replace(" ", "%20", $offer_name);
$link = $_POST["link"];
$link = str_replace(" ", "%20", $link);
if($offer_name && $link)
{
$url = 'https://paypal-payout.herokuapp.com/?offer_name='.$offer_name.'&description='.$link.'';
file_get_contents($url);	
}

if($id)
{
$url = 'https://paypal-payout.herokuapp.com/?delete_offer=1&id='.$id.'';
file_get_contents($url);
}
$data =  file_get_contents("https://paypal-payout.herokuapp.com/?offer=1");
$arr = json_decode($data, true);

include("menu.php");
?>
<div id="content">

<table cellspacing="0" cellpadding="10" border="1">
<tr>
	<thead>
<th>Offer Name</th>
<th>Description / Link</th>
<th>Action</th>
	</thead>
</tr>
<?php
foreach($arr as $child) {
foreach($child as $child1) {
?>
	<tbody>
<tr>
<?php
echo '<td>'.$child1["offer_name"].'</td>';
echo '<td>'.$child1["description"].'</td>';
echo '<td>&nbsp;&nbsp; <a href="index.php?id='.$child1["id"].'">Delete</a></td>';
?>

</tr> 
<?php
}
}
?>
	</tbody>
</table>
<a href="edit.php">Add New</a>
</div>
<div style="clear:both;"></div>
</body>
</html>
