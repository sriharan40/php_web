<?php
session_start();
?>
<html>

<title>Top Offers List</title>
<body style="margin:0 auto;">
<style>

</style>
	<div class="site-wrap">
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
?>
<!--<div style="float:left; width:200px;  padding-left:20px; border-right:1px solid #333333; height:100%;"> -->
<?php
include("menu.php");
?>
<!--<div style="float:left; padding-left:20px;"-->
<h3>Top Offers List</h3>
<br/>
<a href="edit.php">Add New</a>
<br/><br/>
<table>
<tr>
<th>Offer Name</th>
<th>Description / Link</th>
<th>Action</th>
</tr>
<?php
foreach($arr as $child) {

foreach($child as $child1) {
?>
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
</table>
</div>
</body>
</html>
