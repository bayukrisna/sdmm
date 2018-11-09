      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA MODEL</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th>No. </th>
                 <th>Model</th>
                  <th>Merk</th>
                  <th>Model No.</th>
                  <th>Kategori</th>
                  <th>Total Aset</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Apakah anda yakin mengapus data ini ?'";
                foreach ($model as $data) {
                  $total_barang = $this->db->query("SELECT count(*) AS total FROM tb_barang WHERE tb_barang.id_model = '$data->id_model'")->row();
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td><a href="'.base_url('model/detail_model/'.$data->id_model).'">'.$data->nama_model.'</a></td>
                  <td>'.$data->merk.'</td>
                  <td>'.$data->model_no.'</td>
                  <td>'.$data->kategori.'</td>
                  <td>'.$total_barang->total.'</td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_model.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                  <a href="'.base_url('model/delete/'.$data->id_model).'" class="btn btn-danger btn-xs btn-flat" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
                
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
        foreach($model as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_model;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT MODEL</h3>
            </div>
                <div class="modal-body">
                  <?php echo form_open('Model/edit_model', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                     <!-- CSRF Token -->
                    <input type="hidden" name="id_model" value="<?php echo $i->id_model ?>">
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Model Asset</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="nama_model" id="name" value="<?php echo $i->nama_model ?>" required="" />
        
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Perusahaan</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_merk">
            <option value="<?php echo $i->id_merk ?>" selected="selected"><?php echo $i->merk ?></option>
            <?php 

                  foreach($drop_merk as $row)
                  { 
                    echo '<option value="'.$row->id_merk.'">'.$row->merk.'</option>';
                  }
                  ?>
        </select>
        
    </div>
</div><!-- Category -->
<!-- Model Number -->
<div class="form-group ">
    <label for="model_number" class="col-md-3 control-label">Model No.</label>
    <div class="col-md-7">
    <input class="form-control" type="text" name="model_no" id="model_number" value="<?php echo $i->model_no ?>" />
        
    </div>
</div>
<!-- EOL -->

<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">EOL</label>
    <div class="col-md-3">
        <div class="input-group">
            <input class="col-md-2 form-control" type="text" name="eol" id="eol" value="<?php echo $i->eol ?>" />
            <span class="input-group-addon">
                months
            </span>
        </div>
    </div>
</div>
<!-- Notes -->
<div class="form-group ">
    <label for="notes" class="col-md-3 control-label">Catatan</label>
    <div class="col-md-7 col-sm-12">
        <textarea class="col-md-6 form-control" id="notes" name="notes"><?php echo $i->notes ?></textarea>
        
    </div>
</div>
<!-- Image -->
<div class="form-group ">

    <label class="col-md-3 control-label" for="image">Unggah Gambar</label>
    <div class="col-md-5">
      <img  src="<?php echo base_url().'uploads/'.$i->image?>" id="output" style="width: 200px" onerror="" >
        <input name="image" onchange="loadFile(event)" type="file" id="image">
        
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

    <?php endforeach;?>


        <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">TAMBAH MODEL</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Model/simpan_model', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Model</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="nama_model" id="name" value="" required="" />
        
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Merk</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_merk">
            <option value="" selected="selected">Pilih Merk</option>
            <?php 

                  foreach($drop_merk as $row)
                  { 
                    echo '<option value="'.$row->id_merk.'">'.$row->merk.'</option>';
                  }
                  ?>
        </select>
        
    </div>
  </div>

  <div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Kategori</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_kategori">
            <option value="" selected="selected">Pilih Kategori</option>
            <?php 

                  foreach($drop_kategori as $row)
                  { 
                    echo '<option value="'.$row->id_kategori.'">'.$row->kategori.'</option>';
                  }
                  ?>
        </select>
        
    </div>
  </div>

<div class="form-group ">
    <label for="model_number" class="col-md-3 control-label">Model No.</label>
    <div class="col-md-7">
    <input class="form-control" type="text" name="model_no" id="model_number" value="" />
        
    </div>
</div>
<!-- EOL -->

<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">EOL</label>
    <div class="col-md-3">
        <div class="input-group">
            <input class="col-md-2 form-control" type="text" name="eol" id="eol" value="" />
            <span class="input-group-addon">
                months
            </span>
        </div>
    </div>
</div>

<!-- Notes -->
<div class="form-group ">
    <label for="notes" class="col-md-3 control-label">Catatan</label>
    <div class="col-md-7 col-sm-12">
        <textarea class="col-md-6 form-control" id="notes" name="notes"></textarea>
        
    </div>
</div>
<!-- Image -->

<div class="form-group ">
    <label class="col-md-3 control-label" for="image">Unggah Gambar</label>
    <div class="col-md-5">
      <img   id="output2" style="width: 200px" onerror="" >
        <input name="image" onchange="loadFile2(event)" type="file" id="image">
        
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

<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
<script>
  var loadFile2 = function(event) {
    var output = document.getElementById('output2');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>