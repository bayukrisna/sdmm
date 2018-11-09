

          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">LAPORAN PEMBELIAN BARANG</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>

            <form class="form-horizontal col-sm-5">
              
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2">Kategori</label>

                  <div class="col-sm-10">

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
                              <br>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Awal</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_pembelian1" id="tgl_pembelian1" required="">
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Akhir</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_pembelian2" id="tgl_pembelian2" required=""><br>
                    <p class="btn btn-info btn-flat" onclick="tampil()">Tampilkan</p>
                    <p class="btn btn-primary btn-flat" onclick="print1()"> Cetak </p>
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
                    url: '<?php echo base_url(); ?>laporan/laporan_barangku/',
                    data: 'tgl_pembelian1='+document.getElementById("tgl_pembelian1").value+'&tgl_pembelian2='+document.getElementById("tgl_pembelian2").value+'&id_kategori='+document.getElementById("id_kategori").value,
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