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
	
if($_POST["submit"])
{
$loginid = $_POST["loginid"];
	
$pass = $_POST["pass"];

$pass = md5($pass);

$url = 'https://paypal-payout.herokuapp.com/?user_name='.$loginid.'&password='.$pass.'';

$result = file_get_contents($url);

if($result == "Valid User")
{
$_SESSION['login']=$loginid;

header("location:index.php");
}

else if($result == "Invalid User")
{
$found="N";
}

}
?>
<br /><br /><br /><br />
<br /><br />
<table width="100%" border="0" cellpadding="5" cellspacing="0">
<tr>
<td width="35%"></td>
<td width="30%" style="border: 1px solid ##4CAF50; color: white; font-weight:bold;" bgcolor="##4CAF50" height="30"><div align="center" style="font-size:18px;" class="style1">Login</div></td>
<td width="35%"></td>
</tr>
  <tr>
    <td width="35%"></td>
    <td width="20%" style="border: 1px solid #0080ff" valign="top">
	<form name="form1" method="post" action="">
      <table width="100%" cellpadding="8" cellspacing="8" border="0">
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
