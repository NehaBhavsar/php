<?php
error_reporting(0);
include("config.php");
include('header.php');

?>
<style type="text/css">
			.fileupload-preview.thumbnail {
				margin-top: 25px;
				overflow: hidden;
			}
			.fileupload-preview.thumbnail > ul {
				margin: 0;
				padding: 0;
			}
			.fileupload-preview.thumbnail li {
				display: block;
				float: left;
				height: 200px;
				list-style-type: none;
				margin-left: 10px;
				margin-top: 7px;
				position: relative;
				width: 32%;
			}			
			.fileupload-preview.thumbnail img {
				width: 100%;
				height:100%;
			}
			
			.remove-img {
				background: none repeat scroll 0 0 rgba(255, 0, 0, 0.46);
				border-radius: 100%;
				color: #fff;
				cursor: pointer;
				padding: 10px 15px;
				position: absolute;
				right: 4px;
				text-align: center;
				top: 3px;
				transition:1s background;				
			}
			.remove-img:hover{
				background: none repeat scroll 0 0 rgba(255, 0, 0, 0.9);
			}
		</style>
        <!--PAGE CONTENT -->
        <div id="content">
            <div class="inner">
                 <div class="row">
                    <div class="col-lg-12">
                       
						<div class="box">
                                <header>
                                    <div class="icons"><i class="icon-plus-sign"></i></div>
                                    <h5>Title List</h5>
									
                                </header>
                    </div>
                </div>
				</div>

                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table align="center" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title_id</th>
											<th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Image</th>
											
                                           	<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql=mysql_query('select * from home_title');
									
									while($raw=mysql_fetch_array($sql))
									{
									
									?>
										<tr class="odd gradeX">
												<td>
												<a href="active-hm-title.php?id=<?php echo $raw['title_id'];?>"><?php echo $raw['title_id'];?></a>
												</td>
                                            <td><b><?php echo $raw['title'];?></b></td>
                                           
												<td><b><?php echo $raw['sub_title'];?></b></td>
												<td><b><img src="<?php echo "../images/".$raw['img_path'];?>" height="100px" width="100px"></b></td>
                                          
											 
											  
											   
											<td class="center" style="text-align:center;">
											<b><a href="edit-hm-title.php?id=<?php echo $raw['title_id'];?>" >Update</a></b>
											
											</td>
                                        </tr>
								<div class="modal fade" id="buttonedModal<?php echo $raw['title_id'];?>" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" aria-hidden="true" data-dismiss="modal"> &times;</button>
                                            <h4 class="modal-title" id="H1">Title Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php 
											
											echo "<b>Title     : </b>".$raw['title']."<br />";		
											echo "<b>Sub Title : </b>".$raw['sub_title']."<br>";
											echo "<b>Image 	   : </b>".$raw['img_path']."<br>";
											
											?>				
											
                                        </div>
                                        <div class="modal-footer">        
											<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                           
						   
						   
<!-- slider image-->
<form action="hm-title-list.php" class="form-horizontal" method="post" id="inline-validate"  enctype="multipart/form-data">
<div class="form-group">
										  
	<label class="control-label col-lg-2">Select Multiple Images of Slider*</label>
		<div>
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<span class="btn btn-file btn-success"><input type="file" name="sld_img[]" id="sld_img" multiple/></span>
														
					  <div class="fileupload-preview thumbnail">
													  
						  <ul>
								<?php
													
									$qr="select * from home_slider_img";
									$qry=mysql_query($qr);													
									while($rows=mysql_fetch_assoc($qry))
									{
								?>
										<li class="img-li">
											<img src="../images/<?php echo $rows['hm_sld_img'];?>"/>
											<a><label class="remove-img" data-val="<?php echo $rows['hm_sld_id'];?>" data-src="<?php echo "../images/".$rows['hm_sld_img']; ?>" >X</label></a>
										</li>
								<?php
									}
								?>
						  </ul>
					  </div>
			</div>
		</div>
										
</div>
 <div class="form-actions col-lg-12">
	<input type="submit" value="Save" name="submit" class="btn btn-primary" />
	<a href="hm-title-list.php"><input type="button" value="Clear" name="cancel" class="btn btn-danger" /></a>
	<a href="dashboard.php"><input type="button" value="Back" name="Back" class="btn btn-danger" /></a>
</div>
</form>	
<?php 
if(isset($_REQUEST['submit']))
{
	$sldr_img=$_FILES['sld_img']['name'];
	$total_files=sizeof($_FILES['sld_img']['name']);
	$error_count=0;	
	if($sldr_img!="")
	{
		for($i=0;$i<$total_files;$i++)
		{
			$ext=strtolower(substr($_FILES['sld_img']['name'][$i],-4));
			if(!($ext=='.jpg' || $ext=='jpeg' ||$ext=='.png' || $ext=='.gif'))
			{
				$error_count++;
			}
			else
			{
				//unlink("../uploads/".$rows['hm_sld_img']);
				$im=md5(time())."_".$_FILES['sld_img']['name'][$i];
				move_uploaded_file($_FILES['sld_img']['tmp_name'][$i],"../images/".$im);
				$sqls="insert into `home_slider_img` (`hm_sld_img`) values('$im')";
				mysql_query($sqls) or die(mysql_error());
				
				if(!mysql_query($q))
				{
					$error_count++;
				}
				else
				{
				?>
					<script><?php alert("please select one Image"); ?></script>
				<?php 
				}
			}
		}
	}
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
	
	
<!-- slider image-->						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
       <!--END PAGE CONTENT -->


    </div>
	</div>
	
	
	
     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  TWB &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
	<script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="assets/js/validationInit.js"></script>

	<script>
        $(function() 
		{ 
			formValidation(); 
		});	
	</script>
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
		<link rel="stylesheet" href="assets/plugins/dataTables/dataTables.bootstrap.css" />
		<link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
	
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>
