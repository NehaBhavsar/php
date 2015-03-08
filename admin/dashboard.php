<?php
error_reporting(0);
include('header.php');
?>
        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12 alncntr">
                        <h1> Welcome To 3D-Eco Administration </h1>
                    </div>
                </div>
                  <hr />
				  
				
				
				  
				  
				
				  
				  <!--home page SECTION -->
                 <div class="row col-lg-6" style="margin-left:1%;">
				 <div class="panel panel-primary">
                        <div class="panel-heading">
                            Home Page
                        </div>
                        <div class="panel-body">
							<center>
							<!--	 <a class="quick-btn" href="add-hm-title.php">
										<i class="icon-check icon-2x"></i>
										<span> Add</span>
										<span class="label label-danger">10</span>  
									</a> 
							-->

                            <a class="quick-btn" href="hm-title-list.php">
                                <i class="icon-gear icon-2x"></i>
                                <span>Manage</span>
                                <!--  <span class="label label-success"> 
								<?php 
								//$sql=mysql_query('select * from title');
								//echo $count=mysql_num_rows($sql);
								?>
								</span> -->
                            </a>
                           
							</center>
                        </div>
                    </div>
                </div>
                  <!--END home page SECTION -->
				  
				    <!--episode SECTION -->
                 <div class="row col-lg-6" style="margin-left:1%;">
				 <div class="panel panel-primary">
                        <div class="panel-heading">
                            About
                        </div>
                        <div class="panel-body">
							<center>
								 <a class="quick-btn" href="add-about-title-list.php">
                                <i class="icon-check icon-2x"></i>
                                <span> Add</span>
                                <!-- <span class="label label-danger">10</span>  -->
                            </a>

                            <a class="quick-btn" href="about-title-list.php	">
                                <i class="icon-gear icon-2x"></i>
                                <span>Manage</span>
                                <!-- <span class="label label-success">
								<?php 
								//$sql=mysql_query('select * from episode');
								//echo $count=mysql_num_rows($sql);
								?>
								</span> -->
                            </a>
                           
							</center>
                        </div>
                    </div>
                </div>
                  <!--END episode SECTION -->
				
				
				    <!--episode E-book SECTION -->
                 <div class="row col-lg-6" style="margin-left:1%;">
				 <div class="panel panel-primary">
                        <div class="panel-heading">
                            Episodes e-book
                        </div>
                        <div class="panel-body">
							<center>
								 <a class="quick-btn" href="add-book.php">
                                <i class="icon-check icon-2x"></i>
                                <span> Add</span>
                                <!-- <span class="label label-danger">10</span>  -->
                            </a>

                            <a class="quick-btn" href="book-list.php">
                                <i class="icon-gear icon-2x"></i>
                                <span>Manage</span>
                                <!-- <span class="label label-success">
								<?php 
								//$sql=mysql_query('select * from episode');
								//echo $count=mysql_num_rows($sql);
								?>
								</span> -->
                            </a>
                           
							</center>
                        </div>
                    </div>
                </div>
                  <!--END episode E-book SECTION -->
				
				<!--about page SECTION -->
                 <div class="row col-lg-6" style="margin-left:1%;">
				 <div class="panel panel-primary">
                        <div class="panel-heading">
                            About Page
                        </div>
                        <div class="panel-body">
							<center>
								 <!--<a class="quick-btn" href="add-about.php">
                                <i class="icon-check icon-2x"></i>
                                <span> Add</span>
                                <!-- <span class="label label-danger">10</span>  
                            </a>-->

                            <a class="quick-btn" href="add-about.php">
                                <i class="icon-gear icon-2x"></i>
                                <span>Manage</span>
                                <!--  <span class="label label-success"> 
								<?php 
								//$sql=mysql_query('select * from title');
								//echo $count=mysql_num_rows($sql);
								?>
								</span> -->
                            </a>
                           
							</center>
                        </div>
                    </div>
                </div>
                  <!--END about page SECTION -->
				  
				<!--Contact Us page SECTION -->
                 <div class="row col-lg-6" style="margin-left:1%;">
				 <div class="panel panel-primary">
                        <div class="panel-heading">
                            Contact Us Page
                        </div>
                        <div class="panel-body">
							<center>
								 <!--<a class="quick-btn" href="add-about.php">
                                <i class="icon-check icon-2x"></i>
                                <span> Add</span>
                                <!-- <span class="label label-danger">10</span>  
                            </a>-->

                            <a class="quick-btn" href="contact-us-list.php">
                                <i class="icon-gear icon-2x"></i>
                                <span>Manage</span>
                                <!--  <span class="label label-success"> 
								<?php 
								//$sql=mysql_query('select * from title');
								//echo $count=mysql_num_rows($sql);
								?>
								</span> -->
                            </a>
                           
							</center>
                        </div>
                    </div>
                </div>
                  <!--Contact Us page SECTION -->
			
				<!--Local User SECTION -->
                 <div class="row col-lg-6" style="margin-left:1%;">
				 <div class="panel panel-primary">
                        <div class="panel-heading">
                            User's Detail
                        </div>
                        <div class="panel-body">
							<center>
								 <!--<a class="quick-btn" href="add-about.php">
                                <i class="icon-check icon-2x"></i>
                                <span> Add</span>
                                <!-- <span class="label label-danger">10</span>  
                            </a>-->

                            <a class="quick-btn" href="user-list.php">
                                <i class="icon-gear icon-2x"></i>
                                <span>Manage</span>
                                <!--  <span class="label label-success"> 
								<?php 
								//$sql=mysql_query('select * from title');
								//echo $count=mysql_num_rows($sql);
								?>
								</span> -->
                            </a>
                           
							</center>
                        </div>
                    </div>
                </div>
                  <!--Local User SECTION -->
               
				
				                
            </div>
			

        </div>
        <!--END PAGE CONTENT -->

    </div>

    <!--END MAIN WRAPPER -->

  <?php
  include('footer.php');
  ?>