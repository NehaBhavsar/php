<?php
	error_reporting(0);
include("config.php");
include('header.php');
	
	$id=$_POST['id'];
	$src=$_POST['src'];
	
	unlink($src);
	$q="delete from home_slider_img where hm_sld_id=$id";
	if(mysql_query($q))
		echo "1";
	else
		echo "0";
?>