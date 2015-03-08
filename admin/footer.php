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

    <!-- PAGE LEVEL SCRIPTS
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->
	
	
	<!-- PAGE LEVEL SCRIPTS For Pagination-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
			 
			 
			 $("li.dropdown").click(function(){
				$(".dropdown-menu.dropdown-user").slideToggle("slow");
			 });
			 
			 $(".dropdown-menu.dropdown-user").mouseleave(function(){
				$(this).slideUp("slow");
			 });
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS For Pagination-->


</body>

    <!-- END BODY -->
</html>


