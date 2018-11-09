           
        <div class="box box-info">
        <div class="box-body">
              <table class="table">
        <tr>
            <td width="15%" class="left_column">Nama Barang / Aset</td>
            <td>: <?php echo $barang->nama_barang; ?></td>
            <td width="15%" class="left_column">Kategori Barang</td>
            <td>: <?php echo $barang->kategori; ?></td>
        </tr>
        <tr>
            <td class="left_column" width="15%">Ditempatkan di</td>
            <td width="35%">: <?php echo $barang->nama_ruang; ?>            </td>
            <td class="left_column" width="15%">Pengguna (User)</td>
            <td>: <?php echo $barang->username; ?>         </td>
        </tr>
               

        </table>
            </div>
            <!-- /.box-body -->
          </div>

          <?php echo $this->session->flashdata('message');?>
       

        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_0" data-toggle="tab">Detail Barang</a></li>
            <li><a href="#tab_1" data-toggle="tab">Pemeliharaan</a></li>
            <li><a href="#tab_2" data-toggle="tab">Riwayat</a></li>
            <li><a href="#tab_3" data-toggle="tab">Berkas</a></li>
             
            </ul>

        <div class="tab-content">

        <div class="tab-pane active" id="tab_0">

        <table width="90%" class="table">
                
                <tr>
                    <td class="left_column" width="15%">Status</td>
                    <td colspan="6">:  <?php echo $barang->status; ?>
                    </td>
                    <td rowspan="8" width="15%">
                        <div class="btn btn-file" >
                 
                  <img id="output" width="225" class="pull-right" width="40%" src="<?php echo base_url(); ?>uploads/<?php echo $barang->image; ?>" alt="Your Image" onerror="this.src='<?php echo base_url();?>uploads/user.jpg'">
                </div></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%"> Bisa Dipinjam</td>
                    <td colspan="6" size="100">: <?php if ($barang->requestable == 'Y') {
                        $a = 'Ya';
                    } else {
                        $a = 'Tidak';
                    }; echo $a; ?></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%"> Perusahaan</td>
                    <td colspan="6" size="100">: <?php echo $barang->nama_perusahaan; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%"> Merk</td>
                    <td colspan="6" size="100">: <?php echo $barang->merk; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%"> Model</td>
                    <td colspan="6" size="100">: <?php echo $barang->nama_model; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%"> No. Model</td>
                    <td colspan="6" size="100">: <?php echo $barang->model_no; ?></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%"> Tanggal Pembelian</td>
                    <td colspan="6" size="100">: <?php echo $barang->tgl_pembelian; ?></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%"> Harga Beli</td>
                    <td colspan="6" size="100">: Rp. <?php echo number_format($barang->harga_barang,2,',','.'); ?></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%"> Pemasok / Supplier </td>
                    <td colspan="6" size="100">: <?php echo $barang->nama_supplier; ?></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%"> Keterangan </td>
                    <td colspan="6" size="100">: <?php echo $barang->ket_bar; ?></td>
                </tr>
                
            </table>
    </div>
         

        <div class="tab-pane" id="tab_1">

        <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>

<div class="table-responsive">
        <table class="table2 table-bordered table-striped" id="example3" >
    <thead>
    <tr>
        <th style="width:5%;text-align:center">No.</th>
        <th style="text-align:center" >Tipe</th>
        <th style="text-align:center" >Keluhan</th>
        <th style="text-align:center" >Pemasok</th>
        <th style="text-align:center" >Tanggal Mulai</th>
         <th style="text-align:center" >Tanggal Selesai</th>
         
        <th style="text-align:center" >Biaya </th>
    </tr>
    </thead>
    <tbody>
    <?php 

        $no = 0;
        foreach($pemeliharaan as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td><?php echo $data->tipe_pemeliharaan;?></td>
        <td><?php echo $data->permasalahan;?></td>
        <td><?php echo $data->nama_supplier?></td>
        <td><?php echo $data->tgl_mulai_perbaikan;?></td>
        <td><?php echo $data->tgl_selesai_perbaikan;?></td>
        <td><?php echo $data->harga_perbaikan;?></td>
    </tr>
   
<?php endforeach; ?>

    

  
  </tbody>
    </table>
</div>
    </div>

    <div class="tab-pane" id="tab_2">

       
        <div class="table-responsive">
        <table class="table2 table-bordered table-striped" id="example1" >
    <thead>
    <tr>
        <th style="width:5%;text-align:center">No.</th>
        <th style="text-align:center" >Waktu</th>
        <th style="text-align:center" >User</th>
        <th style="text-align:center" >Aktivitas</th>
    </tr>
    </thead>
    <tbody>
    <?php 

        $no = 0;
        foreach($riwayat as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td><?php echo $data->waktu_log;?></td>
        <td><?php echo $data->username;?></td>
        <td><?php echo $data->aktivitas?></td>
    </tr>
   
<?php endforeach; ?>

    

  
  </tbody>
    </table>
</div>
    </div>

    <div class="tab-pane" id="tab_3">

        <a href="" data-toggle="modal" data-target="#modal_tambah_berkas" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>

        <div class="table-responsive">
        <table class="table2 table-bordered table-striped" id="example2" >
    <thead>
    <tr>
        <th style="width:5%;text-align:center">No.</th>
        <th style="text-align:center" >Nama Berkas</th>
        <th style="text-align:center" >Keterangan</th>
        <th style="text-align:center" >Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php 

        $no = 0;
        foreach($berkas as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td><?php echo $data->nama_berkas;?></td>
        <td><?php echo $data->keterangan_berkas;?></td>
        <td>
          <a href="<?php echo base_url('uploads/'.$data->nama_berkas); ?>" class="btn btn-warning btn-xs btn-flat" target="_blank"><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">View</span></a>

        <a href="<?php echo base_url('barang/download_berkas/'.$data->nama_berkas); ?>" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-download"></i><span class="tooltiptext">Download</span></a>

      </td>
    </tr>
   
<?php endforeach; ?>

    

  
  </tbody>
    </table>
</div>
    </div>

     </div>
</div>

     </div>
</div>





<div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">TAMBAH PEMELIHARAAN</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Barang/simpan_pemeliharaan/'.$barang->id_barang , 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Barang</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="nama_barang" id="nama_barang" value="<?php echo $barang->nama_barang; ?>" readonly="" />

         <input class="form-control" type="hidden" name="id_barang" id="id_barang" value="<?php echo $barang->id_barang; ?>" readonly="" />
        
    </div>
</div>
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Permasalahan</label>
    <div class="col-md-7 col-sm-12 required">
        <textarea class="form-control" name="permasalahan" id="permasalahan"></textarea>
        
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Tipe Pemeliharaan</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_tipe_pemeliharaan">
            <option value="" selected="selected">Pilih Tipe</option>
            <?php 

                  foreach($getTipe as $row)
                  { 
                    echo '<option value="'.$row->id_tipe_pemeliharaan.'">'.$row->tipe_pemeliharaan.'</option>';
                  }
                  ?>
        </select>
        
    </div>
</div>
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Supplier</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_supplier">
            <option value="<?php echo $barang->id_supplier; ?>" selected="selected"><?php echo $barang->nama_supplier; ?></option>
            <?php 

                  foreach($getSupplier as $row)
                  { 
                    echo '<option value="'.$row->id_supplier.'">'.$row->nama_supplier.'</option>';
                  }
                  ?>
        </select>
        
    </div>
</div><!-- Category -->
<div class="form-group ">
    <label for="model_number" class="col-md-3 control-label">Tanggal Mulai</label>
    <div class="col-md-7">
    <input class="form-control" type="date" name="tgl_mulai_perbaikan" id="tgl_mulai_perbaikan" value="" />
        
    </div>
</div>
<div class="form-group ">
    <label for="model_number" class="col-md-3 control-label">Tanggal Selesai</label>
    <div class="col-md-7">
    <input class="form-control" type="date" name="tgl_selesai_perbaikan" id="tgl_selesai_perbaikan" value="" />
        
    </div>
</div>

<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">Biaya</label>
    <div class="col-md-5">
        <div class="input-group">
            <input class="form-control" type="text" name="harga_perbaikan" id="harga_perbaikan" value="0" />
            <span class="input-group-addon">
                Rupiah
            </span>
        </div>
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

<div class="modal fade" id="modal_tambah_berkas" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">TAMBAH BERKAS</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Barang/simpan_berkas/'.$barang->id_barang , 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Barang</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="nama_barang" id="nama_barang" value="<?php echo $barang->nama_barang; ?>" readonly="" />

         <input class="form-control" type="hidden" name="id_barang" id="id_barang" value="<?php echo $barang->id_barang; ?>" readonly="" />
        
    </div>
</div>
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Keterangan</label>
    <div class="col-md-7 col-sm-12 required">
        <textarea class="form-control" name="keterangan_berkas" id="keterangan_berkas"></textarea>
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label class="col-md-3 control-label" for="image">Unggah Berkas</label>
    <div class="col-md-5">
        <input name="nama_berkas" type="file" id="nama_berkas">
        
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
 