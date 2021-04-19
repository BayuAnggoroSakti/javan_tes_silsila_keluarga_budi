<style>
.blink {
  animation: blink-animation 1s steps(5, start) infinite;
  -webkit-animation: blink-animation 1s steps(5, start) infinite;
  color: #F00;
}
@keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
@-webkit-keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
</style>
<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel" style="height:100px;">
            <div class="pull-left image" style="margin-top:10px;">
              <img src="<?php echo base_url(); ?>assets/lte/dist/img/avatar.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?= $this->session->userdata('NAMA')?> </p>
              <p>
                   <small>
               <?= $this->session->userdata('level_desc')?> 
                  </small>
                </p>
              <a><i style="color:#00A65A;" class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <ul class="sidebar-menu">
            <li class="header">MENU SISTEM</li>
            <!-- <li class="active"><a href="#"><i style="color:#006EA3;" class="fa fa-dashboard text-danger"></i> Dashboard</a></li> -->
            <li><a href="<?php echo site_url('tree') ?>"><i style="color:#888;" class="fa fa-database"></i>Keluarga</a></li>
         
        </section>
        <!-- /.sidebar -->
      </aside>
