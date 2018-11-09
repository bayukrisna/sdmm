      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA MERK (<i>BRAND</i>)</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Merk / Brand</th>
                  <th>Total Aset</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Anda yakin menghapus data ini ?'";
                foreach ($merk as $data) {
                  $total_barang = $this->db->query("SELECT count(*) AS total FROM tb_barang JOIN tb_model ON tb_model.id_model=tb_barang.id_model JOIN tb_merk ON tb_merk.id_merk=tb_model.id_merk WHERE tb_merk.id_merk = '$data->id_merk'")->row();
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="'.base_url('merk/detail_merk/'.$data->id_merk).'">'.$data->merk.'</a></td>
                  <td>'.$total_barang->total.'</td>
                 
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_merk.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                  <a href="'.base_url('merk/hapus_merk/'.$data->id_merk).'" onclick="return confirm('.$alert.')" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
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
        foreach($merk as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_merk;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT MERK (<i>BRAND</i>)</h3>
            </div>
                <div class="modal-body">

                    <?php echo form_open('merk/edit_merk', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Merk</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="merk" id="merk" value="<?php echo $i->merk; ?>" required="" />

        <input class="form-control" type="hidden" name="id_merk" id="id_merk" value="<?php echo $i->id_merk; ?>" required="" />
        
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Kategori</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_kategori">
            <option value="<?php echo $i->id_kategori; ?>" selected="selected"><?php echo $i->kategori; ?></option>
             <?php 
                                        foreach($getKategori as $row)
                                        { 
                                          echo '<option value="'.$row->id_kategori.'">'.$row->kategori.'</option>';
                                        }
                                    ?>
        </select>
        
    </div>
</div><!-- Category -->



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
                <h3 class="modal-title" id="myModalLabel">TAMBAH MERK (<i>BRAND</i>)</h3>
            </div>
                <div class="modal-body">

                    <?php echo form_open('merk/simpan_merk', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Merk</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="merk" id="merk" value="" required="" />
        
    </div>
</div><!-- Manufacturer -->




                    <div class="box-footer text-right">
    
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
</div>                </form>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>



