<?php 
error_reporting(0);
include('header.php');
include('config.php');
$id=$_REQUEST['id'];
//$sql=mysql_query("select a.*,b.city_name,b.city_id,o.org_name.o.org_id from volunteer a LEFT JOIN city b ON a.city_id=b.city_id LEFT JOIN org_regis o ON a.org_id=o.org_id where a.vol_id='$id'");

$sql=mysql_query("select *from home_title where title_id='$id'");


$raw=mysql_fetch_array($sql);


//$org_name=$raw['org_name'];
?>
        <!--PAGE CONTENT -->
        <div id="content">
           
                <div class="inner">
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-ok"></i></div>
                                    <h5>Edit Title</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                        href="#collapse3">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapse3" class="accordion-body collapse in body">
								<div class="panel panel-primary col-lg-12"><br />
                                    <form action="#" class="form-horizontal" method="post" id="inline-validate"  enctype="multipart/form-data">
						<div class="panel panel-primary col-lg-12">
                        <div class="panel-heading">
                            Title Information
                        </div>
                        <div class="panel-body">
						
						
						
										   
										<div class="form-group">
											<label class="control-label col-lg-2">Title*</label>
                                            <div class="col-lg-4">
											
                                                <input type="text" id="title" name="title" value="<?php echo $raw['title'];?>" class="form-control col-lg-6" />
                                            </div>
											
											<label class="control-label col-lg-2">Sub Title*</label>
                                            <div class="col-lg-4">
											
                                                <input type="text" id="sub_title" name="sub_title" value="<?php echo $raw['sub_title'];?>" class="form-control col-lg-6" />
                                            </div>
                                            <div class="form-group">
										<label class="control-label col-lg-2">select image*</label>
													<div class="col-lg-4">
													<div class="fileupload fileupload-new" data-provides="fileupload">
												
													<span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><input type="file" name="ep_file" id="ep_file"/></span>
                                                    <li class="img-li">
													<a><label class="remove-img" data-val="<?php echo $rows['title_id'];?>" data-src="<?php echo "../images/".$rows['img_path']; ?>" >X</label></a></li>
												  <div class="fileupload-preview thumbnail" style="width:50%; height: 50%;"><img src="../images/<?php echo $raw['img_path'];?>" /></div>
											</div>
										</div>
										</div>
                                         
										 
										 
										
                                         
										
										 
										 
										  
										 
										  
										 
										   
										 
										 
										
										
												
										<link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />
										 
                        </div>
                        
                    </div>
					
					
				
						
					<div style="clear:both;"></div>
					
					
					
					
					
					<div class="form-actions col-lg-12" style="text-align:center">
                                            <input type="submit" value="Save" name="submit" class="btn btn-primary" />
											<a href="edit-hm-title.php?id=<?php echo $id;?>">
                                            <input type="button" value="Clear" name="cancel" class="btn btn-danger" /></a>
                                        <a href="hm-title-list.php"><input type="button" value="Back" name="Back" class="btn btn-danger" /></a>
										</div>
										<br />
                                    </form>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                                       
                   <?php 
				   if(isset($_REQUEST['submit']))
				   {
				  
					$title=mysql_real_escape_string($_REQUEST['title']);
					$sub_title=mysql_real_escape_string($_REQUEST['sub_title']);
					$sql=mysql_query("UPDATE `home_title` SET `title` = '$title',`sub_title` = '$sub_title' WHERE `title_id` = '$id'");
					header("Location:hm-title-list.php");
				   
				   }
				   ?>
				   
                   <script>
	$(document).ready(function(){
		
		$("body").on("click",".remove-img",function(){
				
				var id=$(this).attr("data-val");
				var src=$(this).attr("data-src");
				var obj=$(this);
				$.ajax({
					url:"remove-hm-img.php",
					data:"id="+id+"&src="+src,
					type:"post",
					success:function(data){
						if(data=="1")
						{	
							obj.parent("a").parent("li").hide("slow");
						}
					}
				});
				
				
		});
		
	});
</script>
	
	
                    </div>
                </div>
          <!--END PAGE CONTENT -->
        </div>
    
     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  TWB  &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
 <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />

     <!-- GLOBAL SCRIPTS -->
  
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->

   <!--  <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="assets/js/validationInit.js"></script>
    <script>
        $(function () { formValidation(); });
        </script>
     <!--END PAGE LEVEL SCRIPTS -->
     
</body>
     <!-- END BODY -->
</html>
