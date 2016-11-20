<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css" />
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
<form name="form1" method="post" action="login.php">
<table border="0" bgcolor="#ffffff" cellpadding="8" cellspacing="10" style="width:300px !important; margin:0 auto; padding:10px; border-radius:15px;">
  <tr>
		<td align="center" colspan="2"><h2 style="text-align:center; margin-top:5px;">LOGIN</h2></td>
		</tr>	
	   <tr style="background-color:#ffffff;">
          <td><span class="style2">Username</span></td>
          <td><input name="loginid" placeholder="Username" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" placeholder="Password" id="pass2"></td>
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
        <tr style="background-color:#ffffff; border-bottom-radius:15px;">
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" class="btn" value="SUBMIT">		  </td>
        </tr>
      </table>
    </form>
</body>
</html>
