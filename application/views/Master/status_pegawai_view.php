      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">MASTER STATUS PEGAWAI</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="15%" >Status Pegawai</th>
                <th width="1%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($pegawai as $data):
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                    <td><?php echo $data->status_pegawai;?></td>
                    <td>
                      <input type="hidden" id="data_status<?= $data->id_status_pegawai ?>" value="<?= $data->status_pegawai ?>">
                      <a onclick="show_modal('<?= $data->id_status_pegawai; ?>')"  class="btn btn-warning btn-xs btn-flat glyphicon glyphicon-pencil"><span class="tooltiptext">Edit</span></a>
                    <a href="<?= base_url('Master/delete_status_pegawai/'.$data->id_status_pegawai); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat glyphicon glyphicon-trash" ><span class="tooltiptext">Hapus</span></a>

                    </td>
                    
                </tr>
            <?php endforeach; ?>
              
              </tbody>
              </table>
            </div>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">ADD STATUS PEGAWAI</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/add_status_pegawai', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">STATUS PEGAWAI</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="status_pegawai" value="" required="" />
                        
                    </div>
                </div><!-- Manufacturer -->
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Save</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>
    <div class="modal fade" id="modal_edit" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT STATUS PEGAWAI</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/edit_status_pegawai', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Status Pegawai</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input id="id_status_pegawai" type="hidden" name="id_status_pegawai" value="">
                        <input id="status_pegawai" class="form-control" type="text" name="status_pegawai" value="" required="" />
                        
                    </div>
                </div><!-- Manufacturer -->
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Save</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>
    <script type="text/javascript">
      function show_modal(p) {
        $('#modal_edit').modal('show');
        $('#id_status_pegawai').val(p);
        $('#status_pegawai').val($('#data_status'+p).val());
      }
    </script>



