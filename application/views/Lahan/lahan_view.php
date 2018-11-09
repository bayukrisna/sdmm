
    </style>
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA LAHAN</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped table-hover" style="text-transform: uppercase;">

                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>

                <thead>
                <tr>
                  <th style="width: 2%">No</th>
                  <th>Nama Lahan</th>
                  <th>Tgl. Perolehan</th>
                  <th>Luas (m<sup>2</sup>)</th>
                  <th>Harga Perolehan</th>
                  <th>Perusahaan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Apakah anda yakin mengapus data ini ?'";
                foreach ($lahan as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="" data-toggle="modal" data-target="#modal_view'.$data->id_lahan.'">'.$data->nama_lahan.'</a></td>
                  <td>'.$data->tgl_perolehan.'</td>
                  <td>'.$data->luas_lahan.'</td>
                  <td>'.$data->harga_perolehan.'</td>
                  <td>'.$data->nama_perusahaan.'</td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_lahan.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                  <a href="'.base_url('lahan/delete/'.$data->id_lahan).'" class="btn btn-danger btn-xs btn-flat" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
                
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
        foreach($lahan as $i):
        ?>
        <div class="modal fade" id="modal_view<?php echo $i->id_lahan;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">DETAIL LAHAN</h3>
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
                              <td class="left_column">Perusahaan</td>
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
        foreach($lahan as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_lahan;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT PERIODE</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('Lahan/edit_lahan', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Lahan</label>
    <div class="col-md-7 col-sm-12 required">
      <input type="hidden" name="id_lahan" value="<?php echo $i->id_lahan ?>">
        <input class="form-control" type="text" name="nama_lahan" id="nama_lahan" value="<?php echo $i->nama_lahan ?>" required="" />
        
    </div>
</div>
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Tgl. Perolehan</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="date" name="tgl_perolehan" id="tgl_perolehan" value="<?php echo $i->tgl_perolehan ?>" required="" />
        
    </div>
</div>
<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">Luas Lahan</label>
    <div class="col-md-6">
        <div class="input-group">
            <input class="col-md-2 form-control" type="number" name="luas_lahan" id="luas_lahan" value="<?php echo $i->luas_lahan ?>" />
            <span class="input-group-addon">
                m<sup>2</sup>
            </span>
        </div>
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">Harga Perolehan</label>
    <div class="col-md-6">
        <div class="input-group">
            <input class="col-md-2 form-control" type="number" name="harga_perolehan" id="harga_perolehan" value="<?php echo $i->harga_perolehan ?>" />
            <span class="input-group-addon">
                Rupiah
            </span>
        </div>
    </div>
</div>
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Perusahaan</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_perusahaan">
            <option value="<?php echo $i->id_perusahaan ?>" selected="selected"><?php echo $i->nama_perusahaan ?></option>
            <?php 

                  foreach($getPerusahaan as $row)
                  { 

                    echo '<option value="'.$row->id_perusahaan.'">'.$row->nama_perusahaan.'</option>';
                  }
                  ?>
        </select>
        
    </div>
</div><!-- Category -->
<div class="form-group ">
    <label for="model_number" class="col-md-3 control-label">Alamat</label>
    <div class="col-md-7">
    <textarea name="alamat" name="alamat" class="form-control"><?php echo $i->alamat ?></textarea>
        
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
                <h3 class="modal-title" id="myModalLabel">TAMBAH LAHAN</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Lahan/simpan_lahan', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Lahan</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="nama_lahan" id="nama_lahan" value="" required="" />
        
    </div>
</div>
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Tgl. Perolehan</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="date" name="tgl_perolehan" id="tgl_perolehan" value="" required="" />
        
    </div>
</div>
<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">Luas Lahan</label>
    <div class="col-md-6">
        <div class="input-group">
            <input class="col-md-2 form-control" type="number" name="luas_lahan" id="luas_lahan" value="" />
            <span class="input-group-addon">
                m<sup>2</sup>
            </span>
        </div>
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">Harga Perolehan</label>
    <div class="col-md-6">
        <div class="input-group">
            <input class="col-md-2 form-control" type="number" name="harga_perolehan" id="harga_perolehan" value="" />
            <span class="input-group-addon">
                Rupiah
            </span>
        </div>
    </div>
</div>
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Perusahaan</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_perusahaan">
            <option value="" selected="selected">Pilih Perusahaan</option>
            <?php 

                  foreach($getPerusahaan as $row)
                  { 
                    echo '<option value="'.$row->id_perusahaan.'">'.$row->nama_perusahaan.'</option>';
                  }
                  ?>
        </select>
        
    </div>
</div><!-- Category -->
<div class="form-group ">
    <label for="model_number" class="col-md-3 control-label">Alamat</label>
    <div class="col-md-7">
    <textarea name="alamat" name="alamat" class="form-control"></textarea>
        
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


        