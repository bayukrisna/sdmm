<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              
              <h3 class="box-title">KONSENTRASI</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped table-hover table-condensed" style="text-transform: uppercase;">
              <a href="<?php echo base_url() ?>master_konsentrasi/page_tambah_konsentrasi" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Konsentrasi</th>
                  <th>Nama Konsentrasi</th>
                  <th>Nama Prodi</th>
                  <th style="width: 10%">Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Apakah anda yakin mengapus data ini ?'";
                foreach ($konsentrasi as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td>'.$data->id_konsentrasi.'
                  </td>
                  <td>'.$data->nama_konsentrasi.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>
                  <a href="'.base_url('master_konsentrasi/edit_konsentrasi/'.$data->id_konsentrasi).'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                  <a href="'.base_url('master_konsentrasi/hapus_konsentrasi/'.$data->id_konsentrasi).'" class="btn btn-danger btn-xs btn-flat" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
                  </td>
                </tr>
                ';
                
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