
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">LAPORAN PEMELIHARAAN BARANG</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            <form>
            <div class="col-lg-6">
            
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12">Kategori</label>

                  <div class="col-sm-12">

                    <select class="select2" style="width:100%" name="id_kategori" id="id_kategori">
                              <option value="9876" selected="selected"> Pilih Kategori </option>
                              <option value=""> Semua </option>
                                      <?php 

                                    foreach($getKategori as $row)
                                    { 
                                      echo '<option value="'.$row->id_kategori.'">'.$row->kategori.'</option>';
                                    }
                                    ?>
                              </select>
                              <br><br>
                  </div>

                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12">Tipe Pemeliharan</label>

                  <div class="col-sm-12">

                    <select class="select2" style="width:100%" name="id_tipe_pemeliharaan" id="id_tipe_pemeliharaan">
                              <option value="9876" selected="selected"> Pilih Pemeliharaan </option>
                              <option value=""> Semua </option>
                                      <?php 

                                    foreach($getTipe as $row)
                                    { 
                                      echo '<option value="'.$row->id_tipe_pemeliharaan.'">'.$row->tipe_pemeliharaan.'</option>';
                                    }
                                    ?>
                              </select>
                              <br><br>
                  </div>
                      <p class="btn btn-info btn-flat" onclick="tampil()" style="margin-left: 15px">Tampilkan</p>
                    <p class="btn btn-primary btn-flat" onclick="print1()"> Cetak </p>
                    <br><br>
                </div> 

                </div>
                <div class="col-lg-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12">Tanggal Awal</label>

                  <div class="col-sm-10">

                    <input type="date" name="tgl_perbaikan1" id="tgl_perbaikan1" style="width: 100%" class="form-control">
                              <br>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12">Tanggal Akhir</label>

                  <div class="col-sm-10">

                    <input type="date" name="tgl_perbaikan2" id="tgl_perbaikan2" style="width: 100%" class="form-control">
                              <br><br>
                  </div>

                </div>
               
              
              </div>

              
                
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
          </div>
           <div class="box" id="show_data">
            </div>
<script type="text/javascript">
  function tampil(){
      $.ajax({
                    url: '<?php echo base_url(); ?>laporan/laporan_pemeliharaanku/',
                    data: 'tgl_perbaikan1='+document.getElementById("tgl_perbaikan1").value+'&tgl_perbaikan2='+document.getElementById("tgl_perbaikan2").value+'&id_kategori='+document.getElementById("id_kategori").value+'&id_tipe_pemeliharaan='+document.getElementById("id_tipe_pemeliharaan").value,
                    type: 'GET',
                    dataType: 'html',
                    success:function(data){
                    $("#show_data").html(data);
                    },
                    error:function (){}
                });
    }
</script>
<script>
    function print1(){
     var printContents = document.getElementById("ea").innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents; 
    }
  </script>