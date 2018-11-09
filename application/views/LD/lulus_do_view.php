      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA MAHASISWA LULUS ATAU DROP OUT</h3>
            </div>
            <div class="box-body">
              <table class="">
                <tbody>
                  <form method="get" action="<?php echo base_url("mahasiswa/filter_ld/")?>">
                  <tr>
                    <th>Filter</th>
                  </tr>
                  <tr>                                                                    
                    <td>Program Studi</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                      <select name="id_prodi">
                        <option value="">-- Semua --</option>
                        <?php 

                                        foreach($getProdi as $row)
                                        { 
                                          echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                                        }
                                    ?>
                      </select>

                    </td>                                            
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Angkatan</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="angkatan">
                        <option value="">-- Semua --</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                      </select>
                    </td>
                    
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Keluar</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <select name="id_status" id="id_status">
                        <option value="">-- Jenis Keluar --</option>
                        <option value="11">Lulus</option>
                        <option value="13">Mutasi</option>
                        <option value="5">Dikeluarkan</option>
                        <option value="7">Mengundurkan diri</option>
                        <option value="14">Putus Sekolah</option>
                        <option value="8">Meninggal Dunia</option>
                        <option value="10">Hilang</option>
                        <option value="15">Lainnya</option>
                        </select> 
                    </td>
                    <td>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-primary btn-flat btn-xs" value="Cari">  
                    </td>

                  </tr>

                
                </tbody>
              </table>
                      
               </form>

              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <br>

               <a class="btn btn-primary btn-sm btn-flat" href="" data-toggle="modal" data-target="#modal_view"><i class="fa fa-plus"></i> Tambah </a>

               <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Angkatan</th>
                  <th>Prodi</th>
                  <th>Jenis Keluar</th>
                  <th>Tanggal Keluar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($ld as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="" data-toggle="modal" data-target="#modal_lihat'.$data->id_mahasiswa.'">'.$data->nim.'</a></td>
                  <td>'.$data->nama_mahasiswa.'</td>
                  <td>'.substr($data->tgl_du,0,4).'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->status_mhs.'</td>
                  <td>'.$data->tanggal_keluar.'</td>
                  <td>

                  <a  href="" data-toggle="modal" data-target="#modal_edit'.$data->id_mahasiswa.'" class="btn btn-success btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Ubah</span></a>
                ' ;
                
              }
              ?>
                </tbody>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

        <div class="modal fade" id="modal_view" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">TAMBAH MAHASISWA</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('mahasiswa/simpan_ld'); ?>
                      <table class="table" style="text-transform: uppercase;">
                          <tr>
          <td class="left_column">Mahasiswa <font color="#FF0000">*</font></td>
            <td>: 
      <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="validate[required] text-input" style="width:300px" required="">            <input type="hidden" name="id_mahasiswa" id="id_mahasiswa" />
            </td>
        </tr>
        <tr>
          <td class="left_column">Jenis Keluar <font color="#FF0000">*</font></td>
            <td>: 
      <select name="id_status" id="id_status" class="validate[required]" required="">
<option value="">-- Jenis Keluar --</option>
<option value="11">Lulus</option>
<option value="13">Mutasi</option>
<option value="5">Dikeluarkan</option>
<option value="7">Mengundurkan diri</option>
<option value="14">Putus Sekolah</option>
<option value="8">Meninggal Dunia</option>
<option value="10">Hilang</option>
<option value="15">Lainnya</option>
</select>            </td>
        </tr> 
      <tr>
          <td class="left_column" width="20%">Tanggal Keluar <font color="#FF0000">*</font></td>
            <td>: 
      <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="validate[required] text-input" maxlength="50" size="50" style="width:40%" required="">             </td>
        </tr>
        <tr>
          <td class="left_column">Keterangan</td>
            <td>: <textarea wrap="soft" name="keterangan" id="keterangan" rows="5" cols="40"></textarea></td>
        </tr>
         <tr>
          <td class="left_column">SK Yudisium</td>
            <td>: <input type="text" name="sk_yudisium" id="sk_yudisium" class="text-input" maxlength="80" size="80" style="width:400px"></td>
        </tr>
         <tr>
          <td class="left_column" width="20%">Tanggal SK Yudisium</td>
            <td>: 
      <input type="date" name="tgl_sk_yudisium" id="tgl_sk_yudisium" class="text-input" maxlength="50" size="50" style="width:40%">             </td>
        </tr>
         <tr>
          <td class="left_column">IPK</td>
            <td>: <input type="text" name="ipk" id="ipk" value="0,00" class="text-input" maxlength="4" size="4" style="width:10%; background-color: #E0E0E0"></td>
        </tr>
         <tr>
          <td class="left_column">No seri Ijazah</td>
            <td>: <input type="text" name="no_seri_ijazah" id="no_seri_ijazah" class="text-input" maxlength="80" size="80" style="width:400px"></td>
        </tr>
        <tr>
                    <td colspan="4"><button type="submit" class="btn btn-info btn-flat" id="MyBtn">Simpan</button></td>
                  </tr>

                        </table>
                        <?php echo form_close();?>

                    </div>

                </div>
            </div>
            </div>
        </div>


   

    <?php 
        foreach($ld as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_mahasiswa;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Edit Mahasiswa</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('mahasiswa/edit_ld'); ?>
                      <table class="table">
      <tr>
          <td class="left_column">Mahasiswa <font color="#FF0000">*</font></td>
            <td>: 
      <?php echo $i->nama_mahasiswa; ?>          <input type="hidden" name="id_mahasiswa" id="id_mahasiswa" value="<?php echo $i->id_mahasiswa; ?>" />
            </td>
        </tr>
        <tr>
          <td class="left_column">Jenis Keluar <font color="#FF0000">*</font></td>
            <td>: 
      <select name="id_status" id="id_status" class="validate[required]">
<option value="<?php echo $i->id_status; ?>"> <?php echo $i->status_mhs; ?> </option>
<option value="11">Lulus</option>
<option value="13">Mutasi</option>
<option value="5">Dikeluarkan</option>
<option value="7">Mengundurkan diri</option>
<option value="14">Putus Sekolah</option>
<option value="8">Meninggal Dunia</option>
<option value="10">Hilang</option>
<option value="15">Lainnya</option>
</select>            </td>
        </tr> 
      <tr>
          <td class="left_column" width="20%">Tanggal Keluar <font color="#FF0000">*</font></td>
            <td>: 
      <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="validate[required] text-input" maxlength="50" size="50" style="width:40%" value="<?php echo $i->tanggal_keluar; ?>">             </td>
        </tr>
        <tr>
          <td class="left_column">Keterangan</td>
            <td>: <textarea wrap="soft" name="keterangan" id="keterangan" rows="5" cols="40"><?php echo $i->keterangan; ?></textarea></td>
        </tr>
         <tr>
          <td class="left_column">SK Yudisium</td>
            <td>: <input type="text" name="sk_yudisium" id="sk_yudisium" class="text-input" maxlength="80" size="80" style="width:400px" value="<?php echo $i->sk_yudisium; ?>"></td>
        </tr>
         <tr>
          <td class="left_column" width="20%">Tanggal SK Yudisium</td>
            <td>: 
      <input type="date" name="tgl_sk_yudisium" id="tgl_sk_yudisium" class="text-input" maxlength="50" size="50" style="width:40%" value="<?php echo $i->tgl_sk_yudisium; ?>">             </td>
        </tr>
         <tr>
          <td class="left_column">IPK</td>
            <td>: <input type="text" name="ipk" id="ipk"class="text-input" maxlength="4" size="4" style="width:10%; background-color: #E0E0E0;" value="<?php echo $i->ipk; ?>"></td>
        </tr>
         <tr>
          <td class="left_column">No seri Ijazah</td>
            <td>: <input type="text" name="no_seri_ijazah" id="no_seri_ijazah" class="text-input" maxlength="80" size="80" style="width:400px" value="<?php echo $i->no_seri_ijazah; ?>"></td>
        </tr>
        <tr>
                    <td colspan="4"><button type="submit" class="btn btn-info btn-flat" id="MyBtn">Simpan</button></td>
                  </tr>
    </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>

    <?php endforeach;?>

    <?php 
        foreach($ld as $i):
        ?>
        <div class="modal fade" id="modal_lihat<?php echo $i->id_mahasiswa;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Detail Mahasiswa</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      
                      <table class="table">
      <tr>
          <td class="left_column">Mahasiswa <font color="#FF0000">*</font></td>
            <td>: 
      <?php echo $i->nama_mahasiswa; ?>          
            </td>
        </tr>
        <tr>
          <td class="left_column">Jenis Keluar <font color="#FF0000">*</font></td>
            <td>: 
      <?php echo $i->status_mhs; ?>            </td>
        </tr> 
      <tr>
          <td class="left_column" width="20%">Tanggal Keluar <font color="#FF0000">*</font></td>
            <td>: 
      <?php echo $i->tanggal_keluar; ?>             </td>
        </tr>
        <tr>
          <td class="left_column">Keterangan</td>
            <td>: <?php echo $i->keterangan; ?>
        </tr>
         <tr>
          <td class="left_column">SK Yudisium</td>
            <td>: <?php echo $i->sk_yudisium; ?></td>
        </tr>
         <tr>
          <td class="left_column" width="20%">Tanggal SK Yudisium</td>
            <td>: 
      <?php echo $i->tgl_sk_yudisium; ?>       </td>
        </tr>
         <tr>
          <td class="left_column">IPK</td>
            <td>: <?php echo $i->ipk; ?></td>
        </tr>
         <tr>
          <td class="left_column">No seri Ijazah</td>
            <td>: <?php echo $i->no_seri_ijazah; ?></td>
        </tr>
        
    </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
        

    <?php endforeach;?>


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

     <script>

       document.getElementById("nama_mahasiswa").style.visibility = 'visible';
    jQuery(document).ready(function($){
    $('#nama_mahasiswa').autocomplete({
      source:'<?php echo base_url(); ?>mahasiswa/get_autocomplete_ipk', 
      minLength:1,
      select: function(event, ui){
        $('#nama_mahasiswa').val(ui.item.label);
        $('#id_mahasiswa').val(ui.item.id);
        $('#prodimhs').val(ui.item.prodi);
        $('#ipk').val(ui.item.ipk);
     
        
      }
    });    
  });
  
  </script>

