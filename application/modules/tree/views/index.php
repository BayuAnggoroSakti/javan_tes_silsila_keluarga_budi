    <div class="wrapper">
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Keluarga
          </h1>
        </section>
        <section class="content">
          <div class="row">
           <div class="col-xs-12">  
           <!-- <button onclick="modal_add()" class="btn btn-primary"><i class="fa fa-edit"></i> Tambah Unit</button> -->
            <div class="box box-info" style="border-top-color:#006EA3;">
            <div class="box-header">
        
      <button onclick="modal_add()" class="btn btn-primary"><i class="fa fa-edit"></i> Tambah Keluarga</button>
                </div><!-- /.box-header -->
                 <?php

                if($this->session->flashdata('message')['pesan'] != ""){

              ?>
                  <div class="box-body box-body2">
                    <div class="alert alert-<?php echo $this->session->flashdata('message')['alert']; ?> alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <?php echo $this->session->flashdata('message')['pesan']; ?>
                    </div>
                  </div>
            <?php } ?>
            <div class="box-body table-responsive" >

                  <table id="excel" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NAMA</th>
                        <th>JENIS KELAMIN</th>
                        <th>ANAK DARI</th>
                        <th>Action</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                      <?php
                        $i = 1;
                        $unit='';
                        foreach ($keluarga as $data) { 
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data->nama ?></td>
                            <td><?php echo $data->jenis_kelamin ?></td>
                            <td><?php echo $data->parent_name ?></td>
                            <td>
                              <button onclick="modal_edit('<?php echo $data->id ?>')" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                                <a href="<?php echo site_url("tree/hapus?id=".$data->id) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">
                                <i class="fa fa-danger"></i> Hapus
                              </a>
                            </td>
                          </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                 
                  </table>
          </div>
          </div>
          </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
  </div>
</div>
<div id="modal_edit" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 align="center" class="modal-title">Form Edit Keluarga</h3>
        <hr>
      </div>
      <div class="modal-body">
          <form class="form-horizontal"  action="<?php echo base_url(); ?>tree/update" method="post">
              <input type="hidden" name="id" id="id">
            <!-- text input -->
              <div class="form-group">
              <label class="col-sm-3 control-label">Nama</label>
              <div class="col-sm-5">
                 <input type="text" required name="nama" id="nama" class="form-control">
              </div>
            </div>
               <div class="form-group">
              <label class="col-sm-3 control-label">Jenis Kelamin</label>
              <div class="col-sm-5">
                  <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                    <option value="WANITA">WANITA</option>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Kepala Keluarga dari</label>
              <div class="col-sm-5">
                 <select class="form-control" name="id_parent" id="id_parent">
                 <option value="">Silahkan Pilih Parent</option>
                                <?php 
                                  foreach ($keluarga as $row) { ?>
                                    <option value="<?php echo $row->id ?>"><?php echo $row->nama ?></option>
                                <?php
                                  }
                                ?>   
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9">
                 <input type="submit" name="submit" value="Submit" class="btn btn-primary">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
            </div>
      </div> 
      </form>
    </div>
  </div>
  <div id="modal_add" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 align="center" class="modal-title">Form Edit Keluarga</h3>
        <hr>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="<?php echo base_url(); ?>tree/add" method="post">
              <input type="hidden" name="id" id="id">
            <!-- text input -->
              <div class="form-group">
              <label class="col-sm-3 control-label">Nama</label>
              <div class="col-sm-5">
                 <input type="text" required name="nama" id="nama" class="form-control">
              </div>
            </div>
               <div class="form-group">
              <label class="col-sm-3 control-label">Jenis Kelamin</label>
              <div class="col-sm-5">
                  <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                    <option value="WANITA">WANITA</option>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Kepala Keluarga dari</label>
              <div class="col-sm-5">
                 <select class="form-control" name="id_parent" id="id_parent">
                 <option value="">Silahkan Pilih Parent</option>
                                <?php 
                                  foreach ($keluarga as $row) { ?>
                                    <option value="<?php echo $row->id ?>"><?php echo $row->nama ?></option>
                                <?php
                                  }
                                ?>   
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-9">
                 <input type="submit" name="submit" value="Submit" class="btn btn-primary">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
            </div>
      </div> 
      </form>
    </div>
  </div>
<script>
$(document).ready(function() {
    document.title = 'Data Keluarga';
    $('#excel').DataTable( {
        dom: 'Bfrtip',
        buttons: [ {
            extend: 'excelHtml5',
            customize: function ( xlsx ){
                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                $('row c[r*="10"]', sheet).attr( 's', '25' );
            }
        } ]
    } );
} );
  

 function modal_edit(id)
  {
     $.ajax({
          url: "<?php echo site_url('tree/edit_keluarga') ?>/"+id,
          type: 'GET',
          dataType: 'json', // added data type
          success: function(data) {
              console.log(data);
              $('#modal_edit').modal('show');
              $('#id').val(data['id']);
              $('#nama').val(data['nama']);
              $('#jenis_kelamin').val(data['jenis_kelamin']);
              $('#id_parent').val(data['id_parent']);
              console.log(data['id_parent']);
             
          }
      });
  }
 function modal_add()
  {
       $('#modal_add').modal('show');
  }
</script>
