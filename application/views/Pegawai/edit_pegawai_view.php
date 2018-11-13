<div class="row" > 
    <div class="col-md-12" >
      <?php echo $this->session->flashdata('message');?>
        <div >
          <div class="panel panel-danger">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> EDIT PEGAWAI</div>
            <div class="panel-body" >
              <div class="row" >
                <div class="col-lg-6">
                  <?php echo form_open('pegawai/simpan_edit_pegawai/'.$pegawai->id_pegawai,' method="post" role="form" enctype="multipart/form-data"'); ?>
                      <div class="form-group ">
                          <label>Nama Pegawai</label>
                          <div class="form-group">
                               <input type="text" name="nama_pegawai" class="form-control" id="nama_barang" placeholder="Wajib Diisi" required="" value="<?php echo $pegawai->nama_pegawai; ?>">
                              
                          </div>
                      </div>
                        <div class="form-group ">
                          <label>Jenis Kelamin</label>
                          <div class="form-group">
                              <select name="id_kelamin" id="id_kelamin" class="select2" style="width:100%" required="">
                              <option value="<?php echo $pegawai->id_kelamin; ?>" selected="selected"> <?php echo $pegawai->jenis_kelamin; ?> </option>
                              <option value="1"> Laki - laki </option>
                              <option value="2"> Perempuan </option>            
                            </select>
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Agama</label>
                          <div class="form-group">
                              <select name="id_agama" id="id_agama" class="select2" style="width:100%" required="">
                              <option value="<?php echo $pegawai->id_agama; ?>" selected="selected"> <?php echo $pegawai->nama_agama; ?> </option>
                              <option value="1"> Islam </option>
                              <option value="2"> Kristen </option>   
                              <option value="3"> Katholik </option>          
                              <option value="4"> Hindu </option> 
                              <option value="5"> Budha </option> 
                              <option value="6"> Konghucu </option>
                              <option value="7"> Lainnya </option> 
                            </select>
                              
                          </div>
                      </div>
                     <div class="form-group ">
                          <label>Tempat Lahir</label>
                          <div class="form-group">
                             <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?php echo $pegawai->tempat_lahir; ?>">
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Tanggal Lahir</label>
                          <div class="form-group">
                             <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?php echo $pegawai->tgl_lahir; ?>" required="">
                              
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="email">No Telepon</label>
                        <input type="number" name="no_telepon" class="form-control" id="no_telepon" value="<?php echo $pegawai->no_telepon; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $pegawai->email; ?>" >
                      </div>
                      <div class="form-group ">
                          <label>Foto Pegawai</label>
                          <div class="form-group">
                             <input type="file" name="foto_pegawai" class="form-control" id="foto_pegawai" value="<?php echo $pegawai->foto_pegawai; ?>">
                              
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Isi Bila Ada"><?php echo $pegawai->alamat; ?></textarea>
                      </div>
                     
                    </div>
                    <div class="col-lg-6">
                       <div class="form-group ">
                          <label>NIP</label>
                          <div class="form-group">
                             <input type="text" name="nip" class="form-control" id="nip" value="<?php echo $pegawai->nip; ?>">
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Status</label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="id_status_pegawai">
                                  <option value="<?php echo $pegawai->id_status_pegawai; ?>" selected="selected"> <?php echo $pegawai->status_pegawai; ?> </option>
                                      <?php 

                                    foreach($getStatusPegawai as $row)
                                    { 
                                      echo '<option value="'.$row->id_status_pegawai.'">'.$row->status_pegawai.'</option>';
                                    }
                                    ?>
                              </select>
                               
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Jenis</label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="id_jp">
                                  <option value="<?php echo $pegawai->id_jp; ?>" selected="selected"> <?php echo $pegawai->jenis_pegawai; ?> </option>
                                      <?php 

                                    foreach($getJenisPegawai as $row)
                                    { 
                                      echo '<option value="'.$row->id_jp.'">'.$row->jenis_pegawai.'</option>';
                                    }
                                    ?>
                              </select>
                               
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Divisi <font color="#FF0000">*</font></label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="id_divisi" required="">
                                  <option value="<?php echo $pegawai->id_divisi; ?>" selected="selected"> <?php echo $pegawai->nama_divisi; ?> </option>
                                      <?php 

                                    foreach($getDivisi as $row)
                                    { 
                                      echo '<option value="'.$row->id_divisi.'">'.$row->nama_divisi.'</option>';
                                    }
                                    ?>
                              </select>
                               
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Kampus <font color="#FF0000">*</font></label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="id_campus" required="">
                                  <option value="<?php echo $pegawai->id_campus; ?>" selected="selected"> <?php echo $pegawai->nama_campus; ?> </option>
                                      <?php 

                                    foreach($getCampus as $row)
                                    { 
                                      echo '<option value="'.$row->id_campus.'">'.$row->nama_campus.'</option>';
                                    }
                                    ?>
                              </select>
                               
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>No Kartu Pegawai</label>
                          <div class="form-group">
                             <input type="text" name="no_kartu_pegawai" class="form-control" id="no_kartu_pegawai" value="<?php echo $pegawai->no_kartu_pegawai; ?>">
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Tanggal Masuk</label>
                          <div class="form-group">
                             <input type="date" name="tgl_masuk" class="form-control" id="tgl_masuk" value="<?php echo $pegawai->tgl_masuk; ?>">
                              
                          </div>
                      </div>
                       <div class="form-group ">
                          <label>No. NPWP</label>
                          <div class="form-group">
                             <input type="text" name="no_npwp" class="form-control" id="no_npwp" value="<?php echo $pegawai->no_npwp; ?>">
                          </div>
                      </div>
                       <div class="form-group ">
                          <label>No. Askes Pegawai</label>
                          <div class="form-group">
                             <input type="text" name="no_askes_pegawai" class="form-control" id="no_askes_pegawai" value="<?php echo $pegawai->no_askes_pegawai; ?>">
                              
                          </div>
                      </div>
                      
                  
                      <br>

                       <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div>

                     
                  <?php echo form_close();?>
              </div></div>
            </div>
          </div>
        </div>
          </div>
