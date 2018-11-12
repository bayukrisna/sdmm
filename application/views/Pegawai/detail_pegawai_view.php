        
            
         <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url(); ?>pegawai"><i class="fa fa-angle-left"></i> Back</a>
         <a class="btn btn-sm btn-warning btn-flat" href="<?php echo base_url();?>pegawai/detail_pegawai/<?php echo $pegawai->id_pegawai; ?>">Profil</a>
         <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/keluarga/<?php echo $pegawai->id_pegawai; ?>">Keluarga</a>
         <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/jabatan/<?php echo $pegawai->id_pegawai; ?>">Jabatan</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/pendidikan/<?php echo $pegawai->id_pegawai; ?>">Pendidikan</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/pelatihan/<?php echo $pegawai->id_pegawai; ?>">Pelatihan</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/seminar/<?php echo $pegawai->id_pegawai; ?>">Seminar</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/penghargaan/<?php echo $pegawai->id_pegawai; ?>">Penghargaan</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/cuti/<?php echo $pegawai->id_pegawai; ?>">Cuti</a>
        <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url();?>pegawai/hukuman/<?php echo $pegawai->id_pegawai; ?>">Hukuman</a>
       
       
         <br/><br/> 
           
      <?php echo $this->session->flashdata('message');?>
        <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table" style="text-transform: uppercase;">
        <tr>

            <td width="15%" class="left_column"><b>Nama</b> <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $pegawai->nama_pegawai; ?> </td>
      
            <td class="left_column"><b>Jenis</b> <font color="#FF0000">*</font></td>
            <td>:  <?php echo $pegawai->jenis_pegawai; ?>
                                  
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
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_0" data-toggle="tab">PROFIL</a></li>
             
                        <a class="btn btn-warning btn-flat pull-right" href="<?php echo base_url();?>pegawai/edit_pegawai/<?php echo $pegawai->id_pegawai; ?>"><i class="fa fa-pencil"></i> EDIT</a>
              
              
            </ul>



            <div class="tab-content">

                 <div class="tab-pane active" id="tab_0">
                <table width="90%" class="table" style="text-transform: uppercase;">
                
                <tr>
                    <td class="left_column" width="15%">NIP</td>
                    <td colspan="6">:  <?php echo $pegawai->nip; ?>
                    </td>
          <td rowspan="8" width="15%">
                      
                        <div class="btn btn-file" >
              <img src="<?php echo base_url();?>uploads/<?php echo $pegawai->foto_pegawai; ?>" onerror="this.src='<?php echo base_url();?>uploads/user.jpg'" id="avatar" width="150"  alt="avatar">
              

            </div>
          </td>
          
                </tr>
                <tr>
                    <td class="left_column" width="15%">No Kartu Pegawai</td>
                    <td colspan="6" size="100">: <?php echo $pegawai->no_kartu_pegawai; ?></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">Tanggal Lahir</td>
                    <td colspan="6" size="100">: <?php echo date("d M Y", strtotime($pegawai->tgl_lahir)); ?></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">Tempat Lahir</td>
                    <td colspan="6" size="100">: <?php echo $pegawai->tempat_lahir; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%">Email</td>
                    <td colspan="6" size="100">: <?php echo $pegawai->email; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%">No. Telepon</td>
                    <td colspan="6" size="100">: <?php echo $pegawai->no_telepon; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%">No. Askes</td>
                    <td colspan="6" size="100">: <?php echo $pegawai->no_askes_pegawai; ?></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">No. NPWP</td>
                    <td colspan="6" size="100">: <?php echo $pegawai->no_npwp; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%">Alamat</td>
                    <td colspan="6" size="100">: <?php echo $pegawai->alamat; ?></td>
                </tr>
                
            </table>

              </div>

               <div class="tab-pane" id="tab_1">
                <table width="90%" class="table" style="text-transform: uppercase;">
                <form  method="post" runat="server" action="<?php echo base_url(); ?>profile/save_data" enctype="multipart/form-data">
                <div class="form-group">
                        <div class="col-xs-12">
                          <div class="col-sm-2">
                              <label for="first_name" ><h5><b>Username</b></h5></label>
                          </div>
                          <div class="col-xs-4">
                              <input type="text" class="form-control" name="username" id="username" value="<?php echo $this->session->userdata('username')?>" title="enter your first name if any." readonly="">
                          </div>
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-xs-12">
                          <div class="col-sm-2">
                              <label for="first_name"><h5 style="font-size: 13.5px"><b>Password Lama</b></h5></label>
                          </div>
                          <div class="col-xs-4">
                              <input type="password" class="form-control" name="password" id="password" placeholder="****" title="enter your first name if any.">
                          </div>
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-xs-12">
                          <div class="col-sm-2">
                              <label for="first_name"><h5><b>Password Baru</b></h5></label>
                          </div>
                          <div class="col-xs-4">
                              <input type="password" class="form-control" name="password_baru" id="password_baru" placeholder="****" title="enter your first name if any.">
                          </div>
                        </div>
                </div>
                <div class="form-group" >
                        <br><br><br><br><br><br><br>
                        <div class="col-xs-12">
                          <div class="col-xs-6">
                          <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                          <button class="btn btn-default pull-right" type="reset"><i class="glyphicon glyphicon-repeat"></i> Cancel</button>
                        </div>
                          
                        </div>
                      </div>
                      </form>
                              
                
            </table>
        

              </div>
              
             
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
    <script>
    function loadFile(event) {
                var output = document.getElementById('avatar');
                output.src = URL.createObjectURL(event.target.files[0]);
            }
</script>
        <!-- /.col -->
