
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        Copyright &copy; PT PAMAPERSADA NUSANTARA       
      </footer>

    </div><!-- ./wrapper -->

    <!-- Morris.js charts -->
  <!--   <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/lte/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/lte/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>assets/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>assets/lte/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/lte/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>assets/lte/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--   <script src="<?php echo base_url(); ?>assets/lte/plugins/highcharts/highcharts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lte/plugins/highcharts/exporting.js" type="text/javascript"></script> -->
     
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>assets/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/lte/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url(); ?>assets/lte/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lte/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lte/plugins/datatables/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lte/plugins/datatables/jszip.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lte/plugins/datatables/buttons.html5.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>assets/lte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url(); ?>assets/lte/plugins/fastclick/fastclick.min.js'></script>
    <script src='<?php echo base_url(); ?>assets/timepicker/bootstrap-clockpicker.js'></script>
    <!-- AdminLTE App -->
    <!-- <script src="<?php echo base_url(); ?>assets/lte/dist/js/app.min.js" type="text/javascript"></script> -->
    <!-- AdminLTE for demo purposes -->

    <script type="text/javascript">
if ($(".num").length > 0) {
    document.querySelector(".num").addEventListener("keypress", function (evt) {
    if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
    {
        evt.preventDefault();
    }


});

}
      $(function () {
        $('.clockpicker').clockpicker({
          placement: 'top',
          align: 'left',
          donetext: 'Done'
      });
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
        $("#example3").dataTable();
        $("#example4").dataTable();
        $("#example5").dataTable();
      });
    </script>
        <script type="text/javascript">
    $('#InfroTextSubmit').click(function(){
        
        if ($('#title').val()==="") {
          // invalid
          $('#title').next('.help-inline').show();
          return false;
        }
        else {
          // submit the form here
          // $('#InfroText').submit();
          
          return true;
        }   
    });
    </script>
    <script>
    $(document).ready(function () {
      $("input#submit").click(function(){
        $.ajax({
          type: "POST",
          url: "process.php", // 
          data: $('form.contact').serialize(),
          success: function(msg){
            $("#thanks").html(msg)
            $("#form-content").modal('hide'); 
          },
          error: function(){
            alert("failure");
          }
        });
      });
    });
    </script>

  

  </body>
</html>