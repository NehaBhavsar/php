<?php
include('header.php');

?>
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
                                            <th>Sub Title1</th>
											<th>Sub Title2</th>
                                            <th>Sub Title3</th>
                                            <th>Sub Title4</th>
											<th>Image</th>
											
											
											
                                           	<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql=mysql_query('select * from about_title');
									
									while($raw=mysql_fetch_array($sql))
									{
									
									?>
										<tr class="odd gradeX">
                                            <td>
												<a href="active-episode.php?id=<?php echo $raw['title_id'];?>"><?php echo $raw['title_id'];?></a>
												</td>
											<td><b><?php echo $raw['title'];?></b></td>
                                           
												<td><b><?php echo $raw['sub_title1'];?></b></td>
                                                <td><b><?php echo $raw['sub_title2'];?></b></td>
                                                <td><b><?php echo $raw['sub_title3'];?></b></td>
                                                <td><b><?php echo $raw['sub_title4'];?></b></td>
												
												<td><b><img src="<?php echo "../images/".$raw['img_path'];?>" height="100px" width="100px"></b></td>
                                          
											 
											  
											   
											<td class="center">
											<b><a href="edit-episode.php?id=<?php echo $raw['title_id'];?>" ><img src="img/edit.png" alt="Edit Episode" title="Edit Episode"/></a></b>
											&nbsp;
											<b><a href="delete-episode.php?id=<?php echo $raw['title_id'];?>" onClick="return confirm('Are you sure you want to delete?')"><img src="img/delete.png" alt="Delete Episode" title="Delete Episode"/></a></b>
											&nbsp;<b>
											<a href="" onClick="reply_click(this.value)" id="<?php echo $raw['title_id'];?>" data-toggle="modal" data-target="#buttonedModal<?php echo $raw['title_id'];?>" ><img src="img/view1.jpg" height="23" alt="View Episode" title="View Episode"/></a> </b>
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
											
											echo "<b>Title    : </b>".$raw['title']."<br />";		
											echo "<b>Sub Title: </b>".$raw['sub_title1']."<br/ >";
											echo "<b>Sub Title: </b>".$raw['sub_title2']."<br/ >";
											echo "<b>Sub Title: </b>".$raw['sub_title3']."<br/ >";
											echo "<b>Sub Title: </b>".$raw['sub_title4']."<br/ >";
								
											echo "<b>Image    : </b><img src=../images/".$raw['img_path']." style='height:30%; width:30%;'";
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
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
		<link rel="stylesheet" href="assets/plugins/dataTables/dataTables.bootstrap.css" />
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
