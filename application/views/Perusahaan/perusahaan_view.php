      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA PERUSAHAAN</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Apakah anda yakin mengapus data ini ?'";
                foreach ($perusahaan as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td>'.$data->nama_perusahaan.'</td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_perusahaan.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                  <a href="'.base_url('perusahaan/delete/'.$data->id_perusahaan).'" class="btn btn-danger btn-xs btn-flat" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
                
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
        foreach($perusahaan as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_perusahaan;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT PERUSAHAAN</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('Perusahaan/edit_perusahaan', 'class="form-horizontal"'); ?>
                    <!-- Name -->
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Nama Perusahaan</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input class="form-control" type="text" name="nama_perusahaan" id="name" value="<?php echo $i->nama_perusahaan ?>" />
                            <input type="hidden" name="id_perusahaan" value="<?php echo $i->id_perusahaan ?>">
                            
                        </div>
                    </div><!-- Manufacturer -->

                    <div class="box-footer text-right">
                      <button type="submit" class="btn btn-info"><i class="fa fa-check icon-white"></i> Simpan</button>
                    </div>    

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
                <h3 class="modal-title" id="myModalLabel">TAMBAH PERUSAHAAN</h3>
            </div>
                <div class="modal-body">
                   <?php echo form_open('Perusahaan/simpan_perusahaan', 'class="form-horizontal"'); ?>
                    <!-- Name -->
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Nama Perusahaan</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input class="form-control" type="text" name="nama_perusahaan" id="name" value="" />
                            
                        </div>
                    </div><!-- Manufacturer -->

                    <div class="box-footer text-right">
                      <button type="submit" class="btn btn-info"><i class="fa fa-check icon-white"></i> Simpan</button>
                    </div>                

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>

