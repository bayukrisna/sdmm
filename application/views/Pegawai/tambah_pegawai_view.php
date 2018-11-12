<div class="row" > 
    <div class="col-md-12" >
      <?php echo $this->session->flashdata('message');?>
        <div >
          <div class="panel panel-danger">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> TAMBAH PEGAWAI</div>
            <div class="panel-body" >
              <div class="row" >
                <div class="col-lg-6">
                  <?php echo form_open('pegawai/simpan_pegawai',' method="post" role="form" enctype="multipart/form-data"'); ?>
                      <div class="form-group ">
                          <label>Nama Pegawai</label>
                          <div class="form-group">
                               <input type="text" name="nama_pegawai" class="form-control" id="nama_barang" placeholder="Wajib Diisi" required="" >
                              
                          </div>
                      </div>
                        <div class="form-group ">
                          <label>Jenis Kelamin</label>
                          <div class="form-group">
                              <select name="id_kelamin" id="id_kelamin" class="select2" style="width:100%" required="">
                              <option value="" selected="selected"> Pilih Jenis Kelamin </option>
                              <option value="1"> Laki - laki </option>
                              <option value="2"> Perempuan </option>            
                            </select>
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Agama</label>
                          <div class="form-group">
                              <select name="id_agama" id="id_agama" class="select2" style="width:100%" required="">
                              <option value="" selected="selected"> Pilih Agama </option>
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
                             <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="">
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Tanggal Lahir</label>
                          <div class="form-group">
                             <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="" required="">
                              
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="email">No Telepon</label>
                        <input type="number" name="no_telepon" class="form-control" id="no_telepon" value="" >
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="" >
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Isi Bila Ada"></textarea>
                      </div>
                     
                    </div>
                    <div class="col-lg-6">
                       <div class="form-group ">
                          <label>NIP</label>
                          <div class="form-group">
                             <input type="text" name="nip" class="form-control" id="nip" value="">
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Jenis</label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="id_jp">
                                  <option value="" selected="selected"> Pilih Jenis </option>
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
                          <label>No Kartu Pegawai</label>
                          <div class="form-group">
                             <input type="text" name="no_kartu_pegawai" class="form-control" id="no_kartu_pegawai" value="">
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Tanggal Masuk</label>
                          <div class="form-group">
                             <input type="date" name="tgl_masuk" class="form-control" id="tgl_masuk" value="">
                              
                          </div>
                      </div>
                       <div class="form-group ">
                          <label>No. NPWP</label>
                          <div class="form-group">
                             <input type="text" name="no_npwp" class="form-control" id="no_npwp" value="">
                              <input type="hidden" name="id_status_pegawai" class="form-control" id="id_status_pegawai" value="1">
                          </div>
                      </div>
                       <div class="form-group ">
                          <label>No. Askes Pegawai</label>
                          <div class="form-group">
                             <input type="text" name="no_askes_pegawai" class="form-control" id="no_askes_pegawai" value="">
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Foto Pegawai</label>
                          <div class="form-group">
                             <input type="file" name="foto_pegawai" class="form-control" id="foto_pegawai" value="">
                              
                          </div>
                      </div>
                  
                      <br>
                      <br>
                      <br>

                       <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div>

                     
                  <?php echo form_close();?>
              </div></div>
            </div>
          </div>
        </div>
          </div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<script type="text/javascript">
            function get_model(p) {
                var id_merk = document.getElementById('id_merk').value;
                var id_kategori = document.getElementById('id_kategori').value;

                $.ajax({
                    url: '<?php echo base_url(); ?>barang/get_model_by_mk/',
                    data: 'id_merk='+id_merk+'&id_kategori='+id_kategori,
                    type: 'POST',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_model").html(msg);

                    },
                    error:function (){}
                });
            }
</script>

<script type="text/javascript">
            function get_ruang(p) {
                var id_perusahaan = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>barang/get_ruang_by_perusahaan/'+id_perusahaan,
                    data: 'id_perusahaan='+id_perusahaan,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_ruang").html(msg);

                    }
                });
            }
</script>