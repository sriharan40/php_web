<html>
<title>Add Top Offers</title>
<body style="margin:0 auto;">
<style>
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
?>
<div style="float:left; width:200px;  padding-left:20px; border-right:1px solid #333333; height:100%;">
<?php
include("menu.php");
?>
</div>
<div style="float:left; padding-left:20px;">
<h3><u>Add Top Offers</u></h3>
<br/><br/>
<form method="POST" action="index.php" name="form1">
<table cellspacing="0" cellpadding="10" border="1">
<tbody>
<tr>
<td>Offer Name</td><td><input type="text" name="offer_name" value="" /></td>
</tr>
<tr>
<td>Description / Link</td><td><input type="text" name="link" value="" /></td>
</tr>
<tr>
<td>&nbsp;</td><td><input type="submit" value="Submit" /></td>
</tr>
</tbody>
</table>
</div>
</body>
</html>
