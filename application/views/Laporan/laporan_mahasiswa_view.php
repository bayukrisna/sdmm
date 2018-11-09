
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Mahasiswa Per Periode</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun Periode</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="ss" id="ss" class="form-control" required="">
                      <option value="">Pilih Periode</option>   
                              <?php 

                            foreach($getPeriode as $row)
                            { 
                              echo '<option value="'.$row->semester.'">'.$row->semester.'</option>';
                            }
                            ?>
              </select></div>
              <br>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Prodi</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="sa" id="sa" class="form-control" required="" >
                      <option value="*">Pilih Program Studi</option>   
                      <option value="">Semua</option>   
                              <?php 

                            foreach($getProdi as $row)
                            { 
                              echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                            }
                            ?>
                  </select><br>
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
                    url: '<?php echo base_url(); ?>laporan/laporan_mahasiswaku/',
                    data: 'id_periode='+document.getElementById("ss").value+'&id_prodi='+document.getElementById("sa").value,
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