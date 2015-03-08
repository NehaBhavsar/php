<?php

session_start();
include('config.php');

if(isset($_REQUEST['submit']))
{
	
	 $username = $_REQUEST['username'];
	 $password = $_REQUEST['password'];
	
	$sql = "select * from admin where admin_user='$username' and admin_password='$password'";
	$result = mysql_query($sql);
	$raw = mysql_num_rows($result);
	
	
	if($raw > 0)
	 {
		 $raw1=mysql_fetch_array($result);
		 $_SESSION['id']=$raw1['admin_id'];
		
			$_SESSION['username'] = $username;
			
			
		header("Location:dashboard.php");
	 }
	 else{
		 header("Location:dashboard.php");
		 //header("Location:index.php");
	 }
}


?>