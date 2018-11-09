
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Buku Induk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Angkatan</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="angkatan" id="angkatan" class="form-control select2" required="">
                      <option value="">Semua</option>   
                      <option value="2017">2017</option>      
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
              </select></div>
              <br>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun Kelulusan</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="kelulusan" id="kelulusan" class="form-control select2" required="">
                      <option value="">Semua</option>   
                      <option value="2017">2017</option>      
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
              </select></div>
              <br>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Prodi</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="id_prodi" id="id_prodi" class="form-control select2" required="" > 
                      <option value="">Semua</option>   
                              <?php 

                            foreach($getProdi as $row)
                            { 
                              echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                            }
                            ?>
                  </select><br> <br>
                  <p class="btn btn-info" onclick="tampil()">Tampilkan</p>
                    <p class="btn btn-primary" onclick="print1()"> Cetak </p>

                </div>
                    <br>

                    
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
                    url: '<?php echo base_url(); ?>laporan/laporan_buku_indukku/',
                    data: 'angkatan='+document.getElementById("angkatan").value+'&id_prodi='+document.getElementById("id_prodi").value+'&kelulusan='+document.getElementById("kelulusan").value,
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