      
       <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url(); ?>pegawai"><i class="fa fa-angle-left"></i> Back</a>
         <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/detail_pegawai/<?php echo $pegawai->id_pegawai; ?>">Profil</a>
         <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/hukuman/<?php echo $pegawai->id_pegawai; ?>">Keluarga</a>
         <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/jabatan/<?php echo $pegawai->id_pegawai; ?>">Jabatan</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/pendidikan/<?php echo $pegawai->id_pegawai; ?>">Pendidikan</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/pelatihan/<?php echo $pegawai->id_pegawai; ?>">Pelatihan</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/seminar/<?php echo $pegawai->id_pegawai; ?>">Seminar</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/penghargaan/<?php echo $pegawai->id_pegawai; ?>">Penghargaan</a>
        <a class="btn btn-sm btn-warning btn-flat" href="<?php echo base_url();?>pegawai/cuti/<?php echo $pegawai->id_pegawai; ?>">Cuti</a>
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
           <a class="btn btn-primary btn-flat btn-sm pull-right"  data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus"></i> Tambah Cuti</a><br><br><br>
            
          

<div class="box box-info">
  <div class="box-body">
    <div class="table-responsive">
  <table class="table2 table-bordered table-striped" id="example3" style="text-transform: uppercase;">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th style="text-align:center">Alasan Cuti</th>
    <th style="text-align:center">Tanggal Mulai</th>
    <th style="text-align:center">Tanggal Selesai</th>
    <th style="text-align:center; width: 5px">Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php 
        $alert = "'Apakah anda yakin menghapus data ini ?'";
        $no = 0;
        foreach($cuti as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td><?php echo $data->alasan_cuti;?></td>
        <td><?php echo date("d M Y", strtotime($data->tgl_mulai_cuti));?></td>
        <td><?php echo date("d M Y", strtotime($data->tgl_selesai_cuti));?></td>
        <td>
        <a href="<?php echo base_url(); ?>pegawai/hapus_cuti/<?php echo $data->id_cuti; ?>/<?php echo $pegawai->id_pegawai; ?>" class="btn btn-danger btn-xs btn-flat" onclick="return confirm(<?php echo $alert; ?>)"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
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
                <h3 class="modal-title" id="myModalLabel">Tambah Cuti</h3>
            </div>
            <?php echo form_open('pegawai/simpan_cuti/'.$pegawai->id_pegawai); ?>
            <div class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="col-xs-4" >Alasan<font color="#FF0000">*</font></label>
                        <div class="col-xs-6">
                            <textarea class="form-control input-sm pull-left" name="alasan_cuti" id="alasan_cuti" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Tanggal Mulai<font color="#FF0000">*</font></label>
                        <div class="col-xs-6">
                            <input type="date" name="tgl_mulai_cuti" class="form-control input-sm pull-left" id="tgl_mulai_cuti" placeholder="" value="" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Tanggal Selesai<font color="#FF0000">*</font></label>
                        <div class="col-xs-6">
                            <input type="date" name="tgl_selesai_cuti" class="form-control input-sm pull-left" id="tgl_selesai_cuti" placeholder="" value="" required="">
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

          
        
        



      
       
