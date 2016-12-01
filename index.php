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
$title = $_POST["title"];
$title = str_replace(" ", "%20", $title);
$sub_title = $_POST["sub_title"];
$sub_title = str_replace(" ", "%20", $sub_title);
$img_url = $_POST["img_url"];
$img_url = str_replace(" ", "%20", $img_url);
if($title && $sub_title && $img_url)
{
$url = 'https://paypal-payout.herokuapp.com/?category_title='.$title.'&category_sub_title='.$sub_title.'&category_img_url='.$img_url.'';
file_get_contents($url);	
}

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

$data1 =  file_get_contents("https://paypal-payout.herokuapp.com/?category=1");
$arr1 = json_decode($data1, true);

include("menu.php");
?>
<div id="content">

<?php
foreach($arr1 as $child2) {
foreach($child2 as $child21) {
$title = $child21["title"];
$sub_title = $child21["sub_title"];
$img_url = $child21["img_url"];
}
}
?>
<form name="form1" method="POST" action="index.php">
<table cellspacing="0" style="margin-left:0px; margin-top:0px;" cellpadding="10" >
<tr>
<td>Title:</td> <td><input type="text" size="35" name="title" value="<?php echo $title; ?>" /></td>
</tr>
<tr>
<td>Sub Title:</td> <td><input type="text" size="35" name="sub_title" value="<?php echo $sub_title; ?>" /></td>
<tr>
<td>Image URL:</td> <td><input type="text" size="35" name="img_url" value="<?php echo $img_url; ?>" /></td>
<tr>
<td colspan="2" align="right"><input type="submit" style="float:right;" name="submit" value="Update" /></td>
</tr>
</form>
</table>
<br />
<table cellspacing="0" style="margin-left:0px;" cellpadding="10" >
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
