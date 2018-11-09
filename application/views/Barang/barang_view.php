        <?php echo $this->session->flashdata('message');?>
        <div class="box">
        <table class="table">
        <tbody><tr>
            <td class="left_column" width="15%">Kategori Barang </td>
            <td colspan="3" width="95%">:  
      <?php echo $kategori->kategori; ?>      </td>

      
        </tr>
        <tr>
          <td class="left_column">Total  </td>
            <td colspan="3">:  <?php $total_barang = $this->db->query("SELECT count(*) AS total FROM tb_barang JOIN tb_model ON tb_model.id_model=tb_barang.id_model JOIN tb_merk ON tb_merk.id_merk=tb_model.id_merk JOIN tb_kategori ON tb_kategori.id_kategori=tb_model.id_kategori WHERE tb_kategori.id_kategori = $kategori->id_kategori")->row(); ?>
      <?php echo $total_barang->total; ?>           
            </td>
        </tr>
        
       
       
    </tbody></table>
</div>
<div class="">   
      <?php $c =  $this->db->where('id_user', $this->session->userdata('id_user'))->get('tb_akses')->row();
        if ($c->c_bar == 1) { ?>

            <a href="<?php echo base_url(); ?>barang/tambah_barang_by_kategori/<?php echo $kategori->id_kategori; ?>" class="btn btn-primary btn-sm btn-flat pull-right" ><i class="fa fa-plus"></i> Tambah</a>
          <?php } ?>

             <a class="btn btn-default btn-sm pull-right" style="margin-right: 10px"  href="<?php echo base_url('barang'); ?>"><i class="fa fa-angle-left"></i> Back </a> <br> <br>

          </div> <br>


    <div class="box box-info">
  <div class="box-body">
    <div class="table-responsive">
  <table class="table2 table-bordered table-striped" id="example3" style="text-transform: uppercase;">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
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
        foreach($barang as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><a href="<?php echo base_url(); ?>barang/detail_barang/<?php echo $data->id_barang; ?>"><?php echo $data->nama_barang;?></a></td>
        <td style="text-align:center"><?php echo $data->merk;?></td>
        <td style="text-align:center"><?php echo $data->nama_model;?></td>
        <td style="text-align:center"><?php echo $data->nama_perusahaan;?></td>
        <td style="text-align:center"><?php echo $data->nama_ruang;?></td>
        <td style="text-align:center"><?php echo $data->status;?></td>
        <td style="text-align:center">
           <?php $c =  $this->db->where('id_user', $this->session->userdata('id_user'))->get('tb_akses')->row();
        if ($c->u_bar == 1) { ?>

          <a href="<?php echo base_url(); ?>barang/page_edit_barang/<?php echo $data->id_barang; ?>"  class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

          <?php } ?>
           <?php $c =  $this->db->where('id_user', $this->session->userdata('id_user'))->get('tb_akses')->row();
        if ($c->d_bar == 1) { ?>

        <a href="<?php echo base_url(); ?>barang/hapus_barang2/<?php echo $data->id_barang; ?>/<?php echo $data->id_kategori; ?>" onclick="return confirm(<?php $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
        <?php } ?>

        </td>

        
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>
</div>
</div>


          </div>


