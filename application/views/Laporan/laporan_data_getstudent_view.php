
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Data Get Student</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="ss" id="ss" class="form-control select2" required="">
                      <option value="*">Pilih Tahun</option>  
                      <?php 

                            foreach($getTahunSgs as $row)
                            { 
                              echo '<option value="'.$row->tanggal_konfirmasi.'">'.$row->tanggal_konfirmasi.'</option>';
                            }
                            ?>
                    </select>
                    <br> <br>
                      <p class="btn btn-info btn-flat" onclick="tampil()">Tampilkan</p>
                      <p class="btn btn-primary btn-flat" onclick="print1()"> Cetak </p>
                  </div>
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
                    url: '<?php echo base_url(); ?>laporan/laporan_data_getstudentku/',
                    data: 'tanggal_konfirmasi='+document.getElementById("ss").value,
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