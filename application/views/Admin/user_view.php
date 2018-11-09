      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA USER</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <thead>
                <tr>
                  <th style="width: 2%">No. </th>
                  <th>Nama</th>
                  <th>Total Aset</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($user as $data) {
                  $total_barang = $this->db->query("SELECT count(*) AS total FROM tb_barang WHERE tb_barang.id_user = '$data->id_user'")->row();
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td><a href="'.base_url('admin/user_log/'.$data->id_user).'">'.$data->username.'</a></td>
                  <td>'.$total_barang->total.'
                 </td>
                
                ' ;
                
              }
              ?>
                </tbody>
              </table>
            </div>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


    


      