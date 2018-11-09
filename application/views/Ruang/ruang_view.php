      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA RUANG</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Ruang</th>
                  <th>Luas (m<sup>2</sup>)</th>
                  <th>Kapasitas</th>
                  <th>Gedung</th>
                  <th>Status</th>
                  <th>Total Aset</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Apakah anda yakin mengapus data ini ?'";
                foreach ($ruang as $data) {
                  $total_barang = $this->db->query("SELECT count(*) AS total FROM tb_barang WHERE tb_barang.id_ruang = '$data->id_ruang'")->row();
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="" data-toggle="modal" data-target="#modal_view'.$data->id_ruang.'">'.$data->nama_ruang.'</a></td>
                  <td>'.$data->luas_ruang.'</td>
                  <td>'.$data->kapasitas.'</td>
                  <td>'.$data->nama_gedung.'</td>
                  <td>'.$data->status.'</td>
                  <td>'.$total_barang->total.'</td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_ruang.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                  <a href="'.base_url('ruang/delete/'.$data->id_ruang).'" class="btn btn-danger btn-xs btn-flat" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
                
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
        foreach($ruang as $i):
        ?>
        <div class="modal fade" id="modal_view<?php echo $i->id_ruang;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">DETAIL RUANG</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <table class="table" style="text-transform: uppercase;">
                          <tr>
                              <td class="left_column" width="40%">Nama Lahan </td>
                                <td colspan="9">:  <?php echo $i->nama_lahan ?>
                            </tr>
                          <tr>
                              <td class="left_column" width="20%">Tgl. Perolehan</td>
                                <td>: 
                           <?php echo $i->tgl_perolehan ?></td>
                            </tr>
                            <tr>
                              <td class="left_column">Luas Lahan</td>
                                <td>: <?php echo $i->luas_lahan ?></td>
                            </tr> 
                            <tr>
                              <td class="left_column">Harga Perolehan</td>
                                <td>: <?php echo $i->harga_perolehan ?></td>
                            </tr> 
                            <tr>
                              <td class="left_column">Nama Perusahaan</td>
                                <td>: <?php echo $i->nama_perusahaan ?></td>
                            </tr> 
                            <tr>
                              <td class="left_column">Alamat</td>
                                <td>: <?php echo $i->alamat ?></td>
                            </tr>
                           
                        </table>

                    </div>

                </div>
            </div>
            </div>
        </div>

    <?php endforeach;?>

    <?php 
        foreach($ruang as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_ruang;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT RUANG</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('ruang/edit_ruang', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Ruang</label>
    <div class="col-md-7 col-sm-12 required">
      <input type="hidden" name="id_ruang" value="<?php echo $i->id_ruang ?>">
        <input class="form-control" type="text" name="nama_ruang" id="nama_ruang" value="<?php echo $i->nama_ruang ?>" required="" />
        
    </div>
</div>
<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">Luas Ruang</label>
    <div class="col-md-6">
        <div class="input-group">
            <input class="col-md-2 form-control" type="number" name="luas_ruang" id="luas_ruang" value="<?php echo $i->luas_ruang ?>" />
            <span class="input-group-addon">
                m<sup>2</sup>
            </span>
        </div>
    </div>
</div>
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Kapasitas</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="kapasitas" id="kapasitas" value="<?php echo $i->kapasitas ?>" required="" />
        
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Gedung</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_gedung">
            <option value="<?php echo $i->id_gedung ?>" selected="selected"><?php echo $i->nama_gedung ?></option>
            <?php 

                  foreach($getGedung as $row)
                  { 
                    echo '<option value="'.$row->id_gedung.'">'.$row->nama_gedung.'</option>';
                  }
                  ?>
        </select>
        
    </div>
</div>
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Status</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_status">
            <option value="<?php echo $i->id_status ?>" selected="selected"><?php echo $i->status ?></option>
            <?php 

                  foreach($getStatus as $row)
                  { 
                    echo '<option value="'.$row->id_status.'">'.$row->status.'</option>';
                  }
                  ?>
        </select>
        
    </div>
</div>


                    <div class="box-footer text-right">
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
</div>                </form>

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
                <h3 class="modal-title" id="myModalLabel">TAMBAH RUANG</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('ruang/simpan_ruang', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Ruang</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="nama_ruang" id="nama_ruang" value="" required="" />
        
    </div>
</div>
<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">Luas Ruang</label>
    <div class="col-md-6">
        <div class="input-group">
            <input class="col-md-2 form-control" type="number" name="luas_ruang" id="luas_ruang" value="" />
            <span class="input-group-addon">
                m<sup>2</sup>
            </span>
        </div>
    </div>
</div>
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Kapasitas</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="kapasitas" id="kapasitas" value="" required="" />
        
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Gedung</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_gedung">
            <option value="" selected="selected">Pilih Gedung</option>
            <?php 

                  foreach($getGedung as $row)
                  { 
                    echo '<option value="'.$row->id_gedung.'">'.$row->nama_gedung.'</option>';
                  }
                  ?>
        </select>
        
    </div>
</div>
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Status</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_status">
            <option value="" selected="selected">Pilih Status</option>
            <?php 

                  foreach($getStatus as $row)
                  { 
                    echo '<option value="'.$row->id_status.'">'.$row->status.'</option>';
                  }
                  ?>
        </select>
        
    </div>
</div>


                    <div class="box-footer text-right">
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
</div>                </form>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>


