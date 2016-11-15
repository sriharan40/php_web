<?php
error_reporting(0);

$data =  file_get_contents("https://paypal-payout.herokuapp.com/?offer=1");

$arr = json_decode($data, true);

?>
</br />
<h3><u>Offers List</u></h3>
</br>
<a href="index.php">Add New</a>
</br></br>
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

echo '<td><a href="index.php?id='.$child1["id"].'">Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="index.php?id='.$child1["id"].'">Delete</a></td>';

?>

</tr>
<?php
}

}
?>
</tbody>
</table>
