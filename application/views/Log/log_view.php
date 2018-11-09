      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA AKTIVITAS USER</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
               
                <thead>
                <tr>
                  <th>No. </th>
                  <th>Waktu</th>
                  <th>User</th>
                  <th>Aksi</th>
                  <th>Item</th>
                  <th>Transfer Ke</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                      $no = 0;
                      foreach($log as $data):
                      ;
                    ?>
                    <tr>
                        <td><?php echo ++$no;?></td>
                        <td><?php echo date('d-m-y h:ia', strtotime($data->waktu_log));?></td>
                        <td><?php echo $data->username;?></td>
                        <td><?php echo $data->aktivitas;?></td>
                        <td><?php echo $data->nama_barang;?></td>
                        <td><?php echo $data->to;?></td>
                    </tr>
                    <?php endforeach; ?>
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


    