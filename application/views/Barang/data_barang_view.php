      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA BARANG / ASET</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table class="table2 table-bordered table-striped" id="example3" style="text-transform: uppercase;">
                 <?php $c =  $this->db->where('id_user', $this->session->userdata('id_user'))->get('tb_akses')->row();
                if ($c->c_bar == 1) { ?>
                <a href="<?php echo base_url(); ?>barang/tambah_barang" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br> <?php } ?>
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th width="10%" style="text-align:center">Kategori</th>
    <th width="10%" style="text-align:center">Nama Barang</th>
    <th width="10%" style="text-align:center">Merk</th>
    <th width="15%" style="text-align:center">Model</th>
    <th width="15%" style="text-align:center">Perusahaan</th>
    <th width="15%" style="text-align:center">Ruang</th>
    <th width="15%" style="text-align:center">Status</th>
    <th width="15%" style="text-align:center">Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php 
        $no = 0;
        $alert = "'Anda yakin menghapus data ini ?'";
        foreach($barang as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td><a href="<?php echo base_url(); ?>barang/data_barang/<?php echo $data->id_kategori; ?>"><?php echo $data->kategori;?></a></td>
        <td><a href="<?php echo base_url(); ?>barang/detail_barang/<?php echo $data->id_barang; ?>"><?php echo $data->nama_barang;?></a></td>
        <td><?php echo $data->merk;?></td>
        <td><?php echo $data->nama_model;?></td>
        <td><?php echo $data->nama_perusahaan;?></td>
        <td><?php echo $data->nama_ruang;?></td>
        <td><?php echo $data->status;?></td>
        <td>
          
          <?php $c =  $this->db->where('id_user', $this->session->userdata('id_user'))->get('tb_akses')->row();
        if ($c->u_bar == 1) { ?>
        <a href="<?php echo base_url(); ?>barang/page_edit_barang/<?php echo $data->id_barang; ?>"  class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

          <?php } ?>

           <?php $c =  $this->db->where('id_user', $this->session->userdata('id_user'))->get('tb_akses')->row();
        if ($c->d_bar == 1) { ?>

        <a href="<?php echo base_url(); ?>barang/hapus_barang/<?php echo $data->id_barang; ?>" onclick="return confirm(<?php $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
        <?php } ?>
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




