<?php
include('config.php');

$email=$_POST['email'];
$email=mysql_real_escape_string($email);

if($email<>""){
$check_user_data = mysql_query("SELECT * FROM admin_users WHERE email = '$email'") or die(mysql_error());
if(mysql_num_rows($check_user_data) == 0)
{
echo '<script language="javascript">alert("This email address does not exist. Please try again.")</script>;';unset($email);
}
else {$row = mysql_fetch_array($check_user_data);$email=$row['email'];

$to = $email;
$subject = "Here are your login details . . . ";
$message = "This is in response to your request for login details as administrator of your ADMIN PANEL.\n\nYour User Name is ".$row['Admin_User'].".\n\nYour Password is ".$row['Admin_Password'].".\n\n Enjoy your ADMIN PANEL.\n\nRegards,\n\n Rhe management";
$headers = "From: ".$psbhostemailaddress."\r\nReply-To: ".$email;

if(mail($to, $subject, $message, $headers)){echo "<center><font face='Verdana' size='2'><b><br><br><br><br><br>THANK YOU</b> <br>Your passwords are posted to your email address. Please check your mail soon.</center>";}

else{echo "<center><font face='Verdana' size='2' color=red>There is some system problem in sending login details to your address. <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";} 

}}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">
<TITLE>Password Recovery—Forgotten Password</TITLE>
<meta name="description" content="Password Recovery—Forgotten Password">
<meta name="keywords" content="Password Recovery,forgot password,forgotten password,php,javascript, dhtml, DHTML">
<style type="text/css">
BODY {margin-left:0; margin-right:0; margin-top:0;text-align:left;background-color:#bbb}
p, li {font:13px Verdana; color:black;text-align:left}
h1 {font:bold 28px Verdana; color:black;text-align:center}
h2 {font:bold 24px Verdana;text-align:center}
h3 {font:bold 15px Verdana;}
.main {position:absolute;width:700px;top:150px;left:150px;padding:30px;text-align:left;border:8px groove blue;background-color:#ddd}
</style>

<div class='main'>

<p><center><B><h2>Password Recovery—Forgotten Password</h2></B></center></p>

<form name="MyForm" method="POST" onsubmit="return validateemail()" action="index.php">

<label for='email'><b>Email address: </b><input type="text" name="email" value="" size="30" maxlength='30'></label><br><br>
<center><input type="submit" value="Recover Forgotten Password"><br><br></center>
<center><input type="reset" value="Reset"><br><br></center>
<center><input type="button" value="Go to Administrator Page" onClick="window.location='administrator-page.php'"><br><br></center>
</form>
</div>

<script language="javascript">

function validateemail(){

var ck_email = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/; 
if (document.MyForm.email.value.search(ck_email)==-1)
{alert("That email address is not valid.");return false}

return true}

</script>

</body></html>