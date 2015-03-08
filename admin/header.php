<?php 
include('config.php');
//include('../include/config.php');
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title> 3D Eco | Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
	
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->
     <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
     <link rel="stylesheet" href="assets/plugins/wysihtml5/dist/bootstrap-wysihtml5-0.0.2.css" />
    <link rel="stylesheet" href="assets/css/Markdown.Editor.hack.css" />
    <link rel="stylesheet" href="assets/plugins/CLEditor1_4_3/jquery.cleditor.css" />
    <link rel="stylesheet" href="assets/css/jquery.cleditor-hack.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-wysihtml5-hack.css" />
    <!-- END GLOBAL SCRIPTS -->
      <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
       <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->

     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53" dir="rtl" >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >    
        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION --> <a href="dashboard.php" class="navbar-brand">
                <!--    <img src="assets/img/logo.png" alt="Avior official" title="Avior official" height="35" /> </a>  -->
				<!--	<img src="assets/img/logo-.png" alt="Play It" title="Avior official" height="35" /> </a>  -->
                <header class="navbar-header">

                   
                </header>

                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links" style="margin-left:10px;">

                    <!-- MESSAGES SECTION -->
					
                   
                    <!--END MESSAGES SECTION -->
					
					<!--START SUPPORT SECTION -->
					
                    <!--END SUPPORT SECTION -->
					
                    <!--TASK SECTION -->
                  
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                    
                    <!-- END ALERTS SECTION -->

					  <!--Volunteer SECTION -->
                    
                    <!-- END Volunteer SECTION -->
					
                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="dashboard.php"><i class="icon-home"></i> Home </a>
                            </li>
							<li><a href="admin-profile.php"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="edit-profile.php?id=<?php echo $_SESSION['id'];?>"><i class="icon-gear"></i> Edit Profile </a>
                            </li>
							<li><a href="add-admin.php"><i class="icon-lock"></i> Add Admin </a>
                            </li>
							<li><a href="manage-admin.php"><i class="icon-lock"></i> Admin List </a>
                            </li>
							<li><a href="change-password.php?id=<?php echo $_SESSION['id'];?>"><i class="icon-lock"></i> Change Password </a>
                            </li>
							<li class="divider"></li>
                            <li><a href="logout.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->		
<?php
//include('menu.php');
?>