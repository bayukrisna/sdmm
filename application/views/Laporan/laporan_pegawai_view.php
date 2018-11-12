<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Pegawai</h3><br>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Masuk</label>

                  <div class="col-sm-10">
                    <div class="col-sm-3">
                      <input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk">
                    </div>
                    <div class="col-sm-3">
                      <input type="date" name="tanggal_masuk2" class="form-control" id="tanggal_masuk2">
                    </div>
              <br>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status Pegawai</label>

                  <div class="col-sm-10">
                    <div class="col-sm-6">
                      <select name="id_status_pegawai" id="id_status_pegawai" class="form-control">
                        <option value="">Semua</option>
                        <?php 
                          foreach($get_status_pegawai as $row)
                            { 
                            echo '<option value="'.$row->id_status_pegawai.'">'.$row->status_pegawai.'</option>';
                              }
                         ?>
                      </select>
                    </div>
              <br>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Pegawai</label>

                  <div class="col-sm-10">
                    <div class="col-sm-6">
                      <select name="id_jp" id="id_jp" class="form-control">
                        <option value="">Semua</option>
                        <?php 
                          foreach($get_jenis_pegawai as $row)
                            { 
                            echo '<option value="'.$row->id_jp.'">'.$row->jenis_pegawai.'</option>';
                              }
                         ?>
                      </select>
                    <br>
                  <p class="btn btn-info" onclick="tampil()">Tampilkan</p>

                </div>
                    <br>

                    
                  </div>

                </div>
                

              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
          </div>
      <div class="box">
        <div class="box-body" id="employee_table">
          
            <table id="example" class="">
              <thead>
                  <tr>
                      <th width="1%">No</th>
                      <th>Nama Pegawai</th>
                      <th>Tempat Lahir</th>
                      <th>Alamat</th>
                      <th>No Telephone</th>
                      <th>Email</th>
                  </tr>
              </thead>
          </table>
          
        </div>
      </div>
      <!-- <button type="button" onclick="cek()" name="" id="" class="btn btn-success">Export Excel </button> -->  
    </div>
  </div>
</section>
<script type="text/javascript">
    function tampil(){
        $.ajax({
                    url: '<?php echo base_url(); ?>Laporan/tampil_pegawai/',
                    data: 'tanggal_masuk='+document.getElementById("tanggal_masuk").value+'&tanggal_masuk2='+document.getElementById("tanggal_masuk2").value+'&id_status_pegawai='+document.getElementById("id_status_pegawai").value+'&id_jp='+document.getElementById("id_jp").value,
                    type: 'POST',
                    dataType: 'json',
                    success:function(msg){
                    $('#example').DataTable( {
                        data:           msg,  
                        deferRender:    true,
                        scrollCollapse: true,
                        scroller:       true,
                        "autoWidth": true
                    } );
                    },
                    error:function (){}
                });
    }
    function cek(){
        var a = document.getElementById("userId").value;
        var b = document.getElementById("start").value;
        var c = document.getElementById("end").value;
        window.location = '<?php echo base_url(); ?>Report/export_borrowing/'+a+'/'+b+'/'+c;
    }
</script>