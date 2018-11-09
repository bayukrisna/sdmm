    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Filter</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="filter" id="filter" class="form-control" onchange="mySemester(this.value)">
                      <option value="">Pilih Filter</option>
                      <option value="dosen">Dosen</option>   
                      <option value="mahasiswa">Mahasiswa</option>
                      <option value="matakuliah">Mata Kuliah</option>      
                              
              </select>
            
                    </div>
              
                  </div>

                </div>
          <div id="tampil_dosen" style="display: none">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Semester</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="semester" id="semester" class="form-control" required="">
                      <option value="">Pilih Semester</option>
                       <?php 

                            foreach($getSemester as $row)
                            { 
                              echo '<option value="'.$row->semester.'">'.$row->semester.'</option>';
                            }
                            ?>   
                      </select>
            
                    </div>
              
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Dosen</label>

                  <div class="col-sm-10">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="">
                      <input type="hidden" class="form-control" name="id_dosen" id="id_dosen" value="">
                      <br>
                    <p class="btn btn-info btn-flat" onclick="tampil_dosen()">Tampilkan</p>
                    <p class="btn btn-primary btn-flat" onclick="print1()"> Cetak </p>
                    </div>
                  </div>

                </div>
          </div>
          <div id="tampil_mahasiswa" style="display: none">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Semester</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="semester_mhs" id="semester_mhs" class="form-control" required="">
                      <option value="">Pilih Semester</option>
                       <?php 

                            foreach($getSemester as $row)
                            { 
                              echo '<option value="'.$row->semester.'">'.$row->semester.'</option>';
                            }
                            ?>   
                      </select>
            
                    </div>
              
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Mahasiswa</label>

                  <div class="col-sm-10">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" value="">
                      <input type="hidden" class="form-control" name="id_mahasiswa" id="id_mahasiswa" value="">
                      <br>
                    <p class="btn btn-info btn-flat" onclick="tampil_mahasiswa()">Tampilkan</p>
                    <p class="btn btn-primary btn-flat" onclick="print1()"> Cetak </p>
                    </div>
                  </div>

                </div>
          </div>
          <div id="tampil_matkul" style="display: none">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Semester</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="semester_matkul" id="semester_matkul" class="form-control" required="">
                      <option value="">Pilih Semester</option>
                       <?php 

                            foreach($getSemester as $row)
                            { 
                              echo '<option value="'.$row->semester.'">'.$row->semester.'</option>';
                            }
                            ?>   
                      </select>
            
                    </div>
              
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Mata Kuliah</label>

                  <div class="col-sm-10">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama_matakuliah" id="nama_matakuliah" value="">
                      <input type="hidden" class="form-control" name="kode_matkul" id="kode_matkul" value="">
                      <br>
                    <p class="btn btn-info btn-flat" onclick="tampil_matkul()">Tampilkan</p>
                    <p class="btn btn-primary btn-flat" onclick="print1()"> Cetak </p>
                    </div>
                  </div>

                </div>
          </div>
                
            
            </div>
</div>
                
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </div>
            <div class="box" id="show_data">
              </div>
<script>
function mySemester(p) {
    var x = p;
    if(x == "dosen"){
      document.getElementById("tampil_dosen").style.display = null;
      document.getElementById("tampil_matkul").style.display = 'none';
      document.getElementById("tampil_mahasiswa").style.display = 'none';
    } else if(x == "mahasiswa"){
      document.getElementById("tampil_dosen").style.display = 'none';
      document.getElementById("tampil_mahasiswa").style.display = null;
      document.getElementById("tampil_matkul").style.display = 'none';
    } else {
      document.getElementById("tampil_dosen").style.display = 'none';
      document.getElementById("tampil_mahasiswa").style.display = 'none';
      document.getElementById("tampil_matkul").style.display = null;
    }
    console.log(x);
}
</script>
<script type="text/javascript">

  jQuery(document).ready(function($){
    $('#nama_dosen').autocomplete({
      source:'<?php echo base_url(); ?>laporan/get_autocomplete_dosen', 
      minLength:1,
      select: function(event, ui){
        $('#nama_dosen').val(ui.item.label)  ;
        $('#id_dosen').val(ui.item.id);
      }
    });
    $('#nama_mahasiswa').autocomplete({
      source:'<?php echo base_url(); ?>laporan/get_autocomplete_mahasiswa', 
      minLength:1,
      select: function(event, ui){
        $('#nama_mahasiswa').val(ui.item.label)  ;
        $('#id_mahasiswa').val(ui.item.id);
      }
    });
    $('#nama_matakuliah').autocomplete({
      source:'<?php echo base_url(); ?>laporan/get_autocomplete_matkul', 
      minLength:1,
      select: function(event, ui){
        $('#nama_matakuliah').val(ui.item.label)  ;
        $('#kode_matkul').val(ui.item.id);
      }
    });          
  });

  
  function tampil_dosen(){
      $.ajax({
                    url: '<?php echo base_url(); ?>laporan/laporan_dmm_dosen/',
                    data: 'semester='+document.getElementById("semester").value+'&id_dosen='+document.getElementById("id_dosen").value,
                    type: 'POST',
                    dataType: 'html',
                    success:function(data){
                      console.log(data);
                    $("#show_data").html(data);
                    },
                    error:function (){}
                });
    }
  function tampil_mahasiswa(){
      $.ajax({
                    url: '<?php echo base_url(); ?>laporan/laporan_dmm_mahasiswa/',
                    data: 'semester='+document.getElementById("semester_mhs").value+'&id_mahasiswa='+document.getElementById("id_mahasiswa").value,
                    type: 'POST',
                    dataType: 'html',
                    success:function(data){
                      console.log(data);
                    $("#show_data").html(data);
                    },
                    error:function (){}
                });
    }
  function tampil_matkul(){
      $.ajax({
                    url: '<?php echo base_url(); ?>laporan/laporan_dmm_matkul/',
                    data: 'semester='+document.getElementById("semester_matkul").value+'&kode_matkul='+document.getElementById("kode_matkul").value,
                    type: 'POST',
                    dataType: 'html',
                    success:function(data){
                      console.log(data);
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