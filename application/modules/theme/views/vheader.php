<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>PT JAVAN</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.1 -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.2.0 -->
  <!--   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    Ionicons 2.0.0
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- Morris chart -->
    <link href="<?php echo base_url(); ?>assets/lte/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url(); ?>assets/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url(); ?>assets/lte/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo base_url(); ?>assets/lte/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
      
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo base_url(); ?>assets/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="<?php echo base_url(); ?>assets/lte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/lte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url(); ?>assets/lte/plugins/datatables/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/timepicker/bootstrap-clockpicker.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/lte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/lte/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />


    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
    
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

<style type="text/css">
.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
    background-color: #2399D1;
    border-color: #2399D1;
}
.skin-blue .sidebar a, .skin-blue .treeview-menu > li > a {
  color: #D9FFD9;
}
.user-panel > .info {
  font-size: 16px;
  font-weight: normal;
}
.btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
    background-color: #006EA3;
    border: 0;
}
.btn-warning {
  border: 0;
}
.btn-danger2 {
  display: inline-block;
  padding: 0;
  margin-bottom: 0;
  font-size: 12px;
  width: 20px;
}
.btn-success2 {
  display: inline-block;
  padding: 0;
  margin-bottom: 0;
  font-size: 12px;
  width: 20px;
}
.alert {
    margin: 10px 0;
    border: 0;
    border-radius: 4px;
}
.box-body2 {
    padding: 0 10px;
}
</style>
</head>
<body class="skin-blue">
    <div class="wrapper">
      <!-- header logo: style can be found in header.less -->
      <header class="main-header">

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" style="background-color: #2399D1; margin-left: 0; height: 0px;" role="navigation">
                <!-- Logo -->   

<span style="font-size: 22px; color: #fff;">SISTEM KELUARGA</span>

          <!-- Sidebar toggle button-->

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding:15px 4px 35px 15px;">
                  <img src="<?php echo base_url(); ?>assets/lte/dist/img/avatar.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header" style="background-color: #2399D1;">
                    <img src="<?php echo base_url(); ?>assets/lte/dist/img/avatar.jpg" class="img-circle" alt="User Image" />
                    <p>
                       <small>
                        <?php echo $this->session->userdata('DIVISI')?>
                      </small>
                     <?= $this->session->userdata('NRP')?> 
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                   
                      
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>login/logout" class="btn btn-default btn-flat">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>