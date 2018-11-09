<div class="row"> 
    <div class="col-md-12">
        <div>
          <div class="panel panel-primary">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> Tambah Konsentrasi</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <?php echo $this->session->flashdata('message');?>
                  <?php echo form_open('master_konsentrasi/save_konsentrasi'); ?>
                      <div class="form-group">
                        <label for="email">Id Konsentrasi</label>
                        <input type="text" name="id_konsentrasi" class="form-control" id="id_konsentrasi" placeholder="Masukkan Id Konsentrasi" value="<?= $kodeunik; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="email">Nama Konsentrasi</label>
                        <input type="text" name="nama_konsentrasi" class="form-control" id="nama_konsnetrasi" placeholder="Masukkan Nama Konsentrasi">
                      </div>
                     
                          <div class="form-group">
                            <label>Nama Prodi</label>
                               <select name="id_prodi" class="form-control select2" style="width: 100%;">
                              <option value=""> -- Pilih Prodi -- </option>
                                  <?php 

                                        foreach($drop_down_prodi as $row)
                                        { 
                                          echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                                        }
                                    ?>
                            </select>
                        <br>
                        <br>

                      <button type="submit" class="btn btn-info">Tambah</button>
                      <button type="reset" class="btn btn-default">Reset</button>
                  <?php echo form_close();?>
              </div></div>
            </div>
          </div>
        </div>
          </div>
        </div></div>