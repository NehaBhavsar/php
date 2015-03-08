<?php

$mode = "LIVE";

if($mode == 'LIVE')
{
	$hostname = "mysql303.ixwebhosting.com";
	$username = "megahea_trendadm";
	$password = "Trends001";
	$database = "megahea_trends";
	
	$con = mysql_connect($hostname,$username,$password) or die("connetion error...");
	mysql_select_db($database,$con) or die("database error..");
	mysql_set_charset('utf8',$con);
}
else
{
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "twb";
	
	$con = mysql_connect($hostname,$username,$password) or die("connetion error...");
	mysql_select_db($database,$con) or die("database error..");
	mysql_set_charset('utf8',$con);
}

?>