<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Transkrip Nilai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIM/Mahasiswa</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" value="">
                      <input type="hidden" class="form-control" name="id_mahasiswa" id="id_mahasiswa">
                      <br><p class="btn btn-info" onclick="tampil()">Tampilkan</p>
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
      $('#nama_mahasiswa').autocomplete({
        source:'<?php echo base_url(); ?>laporan/get_autocomplete_mahasiswa', 
        minLength:1,
        select: function(event, ui){
          $('#nama_mahasiswa').val(ui.item.label)  ;
          $('#id_mahasiswa').val(ui.item.id);
        }
      });
  function tampil(){
      $.ajax({
                    url: '<?php echo base_url(); ?>laporan/laporan_transkripku/',
                    data: 'id_mahasiswa='+document.getElementById("id_mahasiswa").value,
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