      
       <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url(); ?>pegawai"><i class="fa fa-angle-left"></i> Back</a>
         <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/detail_pegawai/<?php echo $pegawai->id_pegawai; ?>">Profil</a>
         <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/hukuman/<?php echo $pegawai->id_pegawai; ?>">Keluarga</a>
         <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/jabatan/<?php echo $pegawai->id_pegawai; ?>">Jabatan</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/pendidikan/<?php echo $pegawai->id_pegawai; ?>">Pendidikan</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/pelatihan/<?php echo $pegawai->id_pegawai; ?>">Pelatihan</a>
        <a class="btn btn-sm btn-warning btn-flat" href="<?php echo base_url();?>pegawai/seminar/<?php echo $pegawai->id_pegawai; ?>">Seminar</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/penghargaan/<?php echo $pegawai->id_pegawai; ?>">Penghargaan</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/cuti/<?php echo $pegawai->id_pegawai; ?>">Cuti</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/hukuman/<?php echo $pegawai->id_pegawai; ?>">Hukuman</a>
        
         <br/><br/>  
          
        <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table" style="text-transform: uppercase;">
        <tr>

            <td width="15%" class="left_column"><b>Nama</b> <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $pegawai->nama_pegawai; ?> </td>
      
            <td class="left_column"><b>Tanggal Lahir</b> <font color="#FF0000">*</font></td>
            <td>:  <?php echo date("d M Y", strtotime($pegawai->tgl_lahir)); ?>
                                  
            <input type="hidden" name="stat_pd" value="A">
            </td>

        </tr>
        <tr>
            <td class="left_column" width="15%" value=><b>Jenis Kelamin</b> <font color="#FF0000">*</font></td>
            <td width="35%">: <?php echo $pegawai->jenis_kelamin; ?>        </td>
            <td class="left_column" width="15%"><b>Agama</b> <font color="#FF0000">*</font></td>
            <td>:
                <?php echo $pegawai->nama_agama; ?>                           </td>
        </tr>
        <tr>
            <td class="left_column" width="15%" value=><b>Status</b> <font color="#FF0000">*</font></td>
            <td width="35%">: <?php echo $pegawai->status_pegawai; ?>        </td>
            <td class="left_column" width="15%"><b>Tanggal Masuk</b> <font color="#FF0000">*</font></td>
            <td>:
                <?php echo date("d M Y", strtotime($pegawai->tgl_masuk)); ?>                          </td>
        </tr>
        
        </table>
            </div>
            <!-- /.box-body -->
          </div>

          <?php echo $this->session->flashdata('message');?>
           <a class="btn btn-primary btn-flat btn-sm pull-right"  data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus"></i> Tambah Riwayat Seminar</a><br><br><br>
            
          

<div class="box box-info">
  <div class="box-body">
    <div class="table-responsive">
  <table class="table2 table-bordered table-striped" id="example3" style="text-transform: uppercase;">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th style="text-align:center">Nama Seminar</th>
    <th style="text-align:center">Lokasi</th>
    <th style="text-align:center">Keterangan</th>
    <th style="text-align:center">Tanggal Seminar</th>
    <th style="text-align:center; width: 5px">Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php 
        $alert = "'Apakah anda yakin menghapus data ini ?'";
        $no = 0;
        foreach($seminar as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td><?php echo $data->nama_seminar;?></td>
        <td><?php echo $data->keterangan_seminar;?></td>
        <td><?php echo $data->lokasi_seminar;?></td>
        <td><?php echo date("d M Y", strtotime($data->tgl_seminar));?></td>
        <td>
        <a href="<?php echo base_url(); ?>pegawai/hapus_seminar/<?php echo $data->id_seminar; ?>/<?php echo $pegawai->id_pegawai; ?>" class="btn btn-danger btn-xs btn-flat" onclick="return confirm(<?php echo $alert; ?>)"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
      </td>
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>
</div>
</div>


          </div>

           <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Riwayat Seminar</h3>
            </div>
            <?php echo form_open('pegawai/simpan_seminar/'.$pegawai->id_pegawai); ?>
            <div class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="col-xs-4" >Nama Seminar<font color="#FF0000">*</font></label>
                        <div class="col-xs-6">
                            <input type="text" name="nama_seminar" class="form-control input-sm pull-left" id="nama_seminar" value="" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Lokasi Seminar </label>
                        <div class="col-xs-6">
                            <input type="text" name="lokasi_seminar" class="form-control input-sm pull-left" id="lokasi_seminar" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Keterangan </label>
                        <div class="col-xs-6">
                            <input type="text" name="keterangan_seminar" class="form-control input-sm pull-left" id="keterangan_seminar" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Tanggal Seminar<font color="#FF0000">*</font></label>
                        <div class="col-xs-6">
                            <input type="date" name="tgl_seminar" class="form-control input-sm pull-left" id="tgl_seminar" placeholder="" value="" required="">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-primary btn-flat" id="myBtn"><i class="fa fa-save"></i> Save</button>
                </div>

                </div>
            <?php echo form_close();?>

            </div></div>
            </div>
        </div>

          
        
        



      
       
