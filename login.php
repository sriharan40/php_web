<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
error_reporting(0);

//extract($_POST);
$loginid = $_POST["loginid"];
	
$pass = $_POST["pass"];
	
$conn = mysql_connect('us-cdbr-iron-east-04.cleardb.net','b213965cc9ad75','9c81ac99');
  if(!$conn)
    {
		die("Could not connect" . mysql_error());
	}
	
 $db =mysql_select_db("heroku_a0067bd7c868fc0", $conn);
  if(!$db)
    {
		die("Could not select database" . mysql_error());
	}
	
if(isset($submit))
{
	$pass = md5($pass);
	$rs=mysql_query("select * from admin_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$loginid;
		header("location:index.php");	
	}
}
?>
<br /><br /><br /><br />
<br /><br />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="35%"></td>
<td width="30%" style="border: 1px solid ##4CAF50; color: white; font-weight:bold;" bgcolor="##4CAF50" height="30"><div align="center" style="font-size:18px;" class="style1">Login</div></td>
<td width="35%"></td>
</tr>
  <tr>
    <td width="35%"></td>
    <td width="20%" style="border: 1px solid #0080ff" valign="top">
	<form name="form1" method="post" action="">
      <table width="100%" cellpadding="9" cellspacing="0" border="0">
        <tr>
          <td><span class="style2">Username</span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
         <?php
		  if(isset($found))
		  { ?>
		<tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
		  <?php } ?>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
      </table>
    </form></td>
	    <td width="45%"></td>
  </tr>
</table>

</body>
</html>
