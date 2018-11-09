      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA KATEGORI</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th style="width:5%">No</th>
                  <th>Kategori</th>
                  <th>Total Aset</th>
                  <th style="width: 10%">Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Anda yakin menghapus data ini ?'";
                foreach ($kategori as $data) {
                  $total_barang = $this->db->query("SELECT count(*) AS total FROM tb_barang JOIN tb_model ON tb_model.id_model=tb_barang.id_model JOIN tb_merk ON tb_merk.id_merk=tb_model.id_merk JOIN tb_kategori ON tb_kategori.id_kategori=tb_model.id_kategori WHERE tb_kategori.id_kategori = '$data->id_kategori'")->row();
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="'.base_url('kategori/detail_kategori/'.$data->id_kategori).'">'.$data->kategori.'</a></td>
                  <td>'.$total_barang->total.'</a></td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_kategori.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                  <a href="'.base_url('kategori/hapus_kategori/'.$data->id_kategori).'" onclick="return confirm('.$alert.')" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

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
        foreach($kategori as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_kategori;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT KATEGORI</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('kategori/edit_kategori'); ?>
                      <table class="table" style="text-transform: uppercase;">
      <tr>
          <td>Nama Kategori <font color="#FF0000">*</font></td>
            <td>:  <input type="text" name="kategori" id="kategori" value="<?php echo $i->kategori; ?>" size="40" style="width:80%" />
              <input type="hidden" name="id_kategori" id="id_kategori" value="<?php echo $i->id_kategori; ?>" size="40" style="width:80%" />
            </td>
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
                <h3 class="modal-title" id="myModalLabel">TAMBAH KATEGORI</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('kategori/simpan_kategori'); ?>
                      <table class="table" style="text-transform: uppercase;">
      <tr>
          <td>Nama Kategori <font color="#FF0000">*</font></td>
            <td>:  <input type="text" name="kategori" id="kategori" value="" size="40" style="width:80%" /></td>
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

