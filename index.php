<html>
<title>Top Offers List</title>
<body>
<?php
error_reporting(0);

$id = $_GET["id"];

$offer_name = $_POST["offer_name"];

$link = $_POST["link"];

if($offer_name && $link)
{
{
file_get_contents("https://paypal-payout.herokuapp.com/?offer_name=".$offer_name."&description=".$link."");	
header("Refresh:0");	
}

if($id)
{
file_get_contents("https://paypal-payout.herokuapp.com/?delete_offer=1&id=".$id."");	
header("Refresh:0");
}

$data =  file_get_contents("https://paypal-payout.herokuapp.com/?offer=1");

$arr = json_decode($data, true);

?>
<h3><u>Top Offers List</u></h3>
<br/>
<a href="edit.php">Add New</a>
<br/><br/>
<table cellspacing="0" cellpadding="10" border="1">
<tbody>
<th>Offer Name</th>
<th>Description / Link</th>
<th>Action</th>
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
</tbody>
</table>
</body>
</html>
