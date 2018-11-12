      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA PEGAWAI</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table class="table2 table-bordered table-striped" id="example3" style="text-transform: uppercase;">
                 
                <a href="<?php echo base_url(); ?>pegawai/tambah_pegawai" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th style="text-align:center">Nama</th>
    <th style="text-align:center">Jenis Kelamin</th>
    <th style="text-align:center">Status</th>
    <th style="text-align:center">Tgl. Masuk</th>
    <th style="text-align:center">Aksi</th>
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
        <td><a href="<?php echo base_url(); ?>pegawai/detail_pegawai/<?php echo $data->id_pegawai; ?>"><?php echo $data->nama_pegawai;?></a></td>
        <td><?php echo $data->jenis_kelamin;?></a></td>
        <td><?php echo $data->status_pegawai;?></td>
        <td><?php echo $data->tgl_masuk;?></td>
        <td>
          
        <a href="<?php echo base_url(); ?>pegawai/edit_pegawai/<?php echo $data->id_pegawai; ?>"  class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

        <a href="<?php echo base_url(); ?>pegawai/hapus_pegawai/<?php echo $data->id_pegawai; ?>" onclick="return confirm(<?php echo  $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
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




