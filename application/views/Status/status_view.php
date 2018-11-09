      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA STATUS</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th style="width: 5%">No</th>
                  <th>Status</th>
                  <th style="width: 10%">Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Apakah anda yakin mengapus data ini ?'";
                foreach ($status as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td>'.$data->status.'</a></td>
                 
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_status.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                  <a href="'.base_url('barang/hapus_status/'.$data->id_status).'" onclick="return confirm('.$alert.')" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
                  </td>
                
                ' ;
                
              }
              ?>
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
   

    <?php 
        foreach($status as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_status;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT STATUS</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('barang/edit_status'); ?>
                      <table class="table" style="text-transform: uppercase;">
      <tr>
          <td>Status <font color="#FF0000">*</font></td>
            <td>  <input type="text" name="status" id="status" value="<?php echo $i->status; ?>" size="40" style="width:80%" required="" />
              <input type="hidden" name="id_status" id="id_status" value="<?php echo $i->id_status; ?>" size="40" style="width:80%" />
        </tr>
  
       
        <tr>
          <td colspan="4"><button type="submit" class="btn btn-info btn-flat">Simpan</button></td>
        </tr>
    </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>

    <?php endforeach;?> 


        <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">TAMBAH STATUS</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('barang/simpan_status'); ?>
                      <table class="table" style="text-transform: uppercase;">
      <tr>
          <td>Status <font color="#FF0000">*</font></td>
            <td>  <input type="text" name="status" id="status" value="" size="40" style="width:80%" required="" />
        </tr>
  
       
        <tr>
          <td colspan="4"><button type="submit" class="btn btn-info btn-flat">Simpan</button></td>
        </tr>
    </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>



