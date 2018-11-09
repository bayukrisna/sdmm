<div class="row" > 
    <div class="col-md-12" >
        <div >
          <div class="panel panel-danger">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> DETAIL PEMASOK (<i>SUPPLIER</i>)</div>
            <div class="panel-body" >
              <div class="row" >
                <div class="col-lg-6">
                  <?php echo $this->session->flashdata('message');?>
                  <?php echo form_open('supplier/edit_supplier'); ?>
                      <div class="form-group">
                        <label for="email">Pemasok</label>
                        <input type="text" name="nama_supplier" class="form-control" id="nama_supplier" placeholder="Wajib Diisi" required="" value="<?php echo $supplier->nama_supplier; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Nama Kontak</label>
                        <input type="text" name="nama_kontak" class="form-control" id="nama_kontak" placeholder="Wajib Diisi" required="" value="<?php echo $supplier->nama_kontak; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Wajib Diisi" required="" value="<?php echo $supplier->no_telp; ?>">
                      </div>
                       <div class="form-group">
                        <label for="email">Kota</label>
                        <input type="text" name="kota" class="form-control" id="kota" placeholder="Wajib Diisi" required="" value="<?php echo $supplier->kota; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Wajib Disii" required=""><?php echo $supplier->alamat; ?></textarea>
                      </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-group">
                        <label for="email">Kode Pos</label>
                        <input type="text" name="kodepos" class="form-control" id="kodepos" placeholder="Wajib Diisi" required="" value="<?php echo $supplier->kodepos; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Fax</label>
                        <input type="text" name="fax" class="form-control" id="fax"  placeholder="Isi Bila Ada" value="<?php echo $supplier->fax; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email"  placeholder="Isi Bila Ada" value="<?php echo $supplier->email; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Url</label>
                        <input type="text" name="url" class="form-control" id="url" placeholder="Isi Bila Ada" value="<?php echo $supplier->url; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Isi Bila Ada"><?php echo $supplier->keterangan; ?></textarea>
                      </div>
                      <br>
                    

                      
                    </div>

                     
                  <?php echo form_close();?>
              </div></div>
            </div>
          </div>
        </div>
          </div>
        