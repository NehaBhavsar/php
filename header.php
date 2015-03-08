<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/jquery.sidr.dark.css">
<title>3D Eco Chemical Labs Canada</title>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(40.730851,-73.997343),
    zoom:16,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("map"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body id="home">
<div id="sidr">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li>
            <a class="active" href="#product">Products</a>
            <div>
                <ul class="subMenu">
                    <li><a href="product.html">Product Type 1</a></li>
                    <li><a href="product.html">Product Type 2</a></li>
                    <li><a href="product.html">Product Type 3</a></li>
                </ul>
            </div>
       </li>
        <li><a href="#market">Markets</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#contacts">Contact</a></li>
    </ul>
</div>
<div class="headerFix"></div>
<div class="headerContainer fixHeader">
	<div class="headerWrapper">
    	<div class="logoWrapper">
        	<a href="index.html"><img src="images/logo.png" alt="3D Eco Chemical Labs Canada"></a>
        </div>
        <div class="navigationWrapper">
        	<ul class="navMenuWrapper">
            	<li><a href="#home">home</a></li>
            	<li><a href="#about">about</a></li>
            	<li class="hasSubMenu">
                	<a class="active" href="#product">products</a>
                    <div class="subMenuWrapper">
                        <ul class="subMenu">
                            <li><a href="product.html">Product Type 1</a></li>
                            <li><a href="product.html">Product Type 2</a></li>
                            <li><a href="product.html">Product Type 3</a></li>
                        </ul>
                    </div>
               </li>
            	<li><a href="#market">markets</a></li>
            	<li><a href="#">blog</a></li>
            	<li><a href="#contacts">contact</a></li>
            </ul>
        </div>
        <a href="#sidr" class="responsiveNavIcon"></a>        
    </div>
</div>