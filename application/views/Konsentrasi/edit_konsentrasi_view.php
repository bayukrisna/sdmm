<form  method="post" action="<?php echo base_url(); ?>master_konsentrasi/save_edit_konsentrasi/<?php echo $edit->id_konsentrasi; ?>" enctype="multipart/form-data">
<div class="row"> 
    <div class="col-md-12">
        <div>
          <div class="panel panel-primary">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> Tambah konsentrasi</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <?php echo $this->session->flashdata('message');?>
                      <div class="form-group">
                        <label for="email">Id konsentrasi</label>
                        <input type="text" name="id_konsentrasi" class="form-control" id="id_konsentrasi" placeholder="Masukkan Id konsentrasi" value="<?php echo $edit->id_konsentrasi; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="email">Nama konsentrasi</label>
                        <input type="text" name="nama_konsentrasi" class="form-control" id="nama_konsentrasi" placeholder="Masukkan Nama konsentrasi" value="<?php echo $edit->nama_konsentrasi; ?>">
                      </div>
                      
                     
                          <div class="form-group">
                            <label>Nama Prodi</label>
                               <select name="id_prodi" class="form-control select2" style="width: 100%;">
                              <option value="<?php echo $edit->id_prodi; ?>" placeholder=""> <?php echo $edit->nama_prodi; ?> </option>
                                  <?php 

                                        foreach($drop_down_prodi as $row)
                                        { 
                                          echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                                        }
                                    ?>
                            </select>
                        <br>
                        <br>

                       <div class="form-group mb-n">

                  <div class="col-sm-8">
                  <label for="exampleInputFile" class="">    </label>
                    <input type="submit" name="submit" class="btn btn-iinfo" background_color="orange" id="largeinput" placeholder="Large Input" value="Ubah">
                  </div>
               
              </div></div>
            </div>
          </div>
        </div>
          </div>
        </div></div>
        </form>