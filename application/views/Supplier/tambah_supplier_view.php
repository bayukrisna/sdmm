<div class="row" > 
    <div class="col-md-12" >
        <div >
          <div class="panel panel-danger">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> TAMBAH PEMASOK (<i>SUPPLIER</i>)</div>
            <div class="panel-body" >
              <div class="row" >
                <div class="col-lg-6">
                  <?php echo $this->session->flashdata('message');?>
                  <?php echo form_open('supplier/simpan_supplier'); ?>
                      <div class="form-group">
                        <label for="email">Pemasok</label>
                        <input type="text" name="nama_supplier" class="form-control" id="nama_supplier" placeholder="Wajib Diisi" required="" >
                      </div>
                      <div class="form-group">
                        <label for="email">Nama Kontak</label>
                        <input type="text" name="nama_kontak" class="form-control" id="nama_kontak" placeholder="Wajib Diisi" required="" >
                      </div>
                      <div class="form-group">
                        <label for="email">No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Wajib Diisi" required="" >
                      </div>
                       <div class="form-group">
                        <label for="email">Kota</label>
                        <input type="text" name="kota" class="form-control" id="kota" placeholder="Wajib Diisi" required="" >
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Wajib Disii" required=""></textarea>
                      </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-group">
                        <label for="email">Kode Pos</label>
                        <input type="text" name="kodepos" class="form-control" id="kodepos" placeholder="Wajib Diisi" required="" >
                      </div>
                      <div class="form-group">
                        <label for="email">Fax</label>
                        <input type="text" name="fax" class="form-control" id="fax" value="" placeholder="Isi Bila Ada">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="" placeholder="Isi Bila Ada">
                      </div>
                      <div class="form-group">
                        <label for="email">Url</label>
                        <input type="text" name="url" class="form-control" id="url" value="" placeholder="Isi Bila Ada">
                      </div>
                      <div class="form-group">
                        <label for="email">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Isi Bila Ada">  </textarea>
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
        