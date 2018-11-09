 <section class="content">
      <div class="row">     
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo $dashboard['t_barang']?></h3>

              <p>Total Barang</p>
            </div>
            <div class="icon">
              <i class="fa fa-barcode"></i>
            </div>
            <a href="<?php echo base_url(); ?>barang/data_aset" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $dashboard['t_perusahaan']?></h3>

              <p>Total Kategori</p>
            </div>
            <div class="icon">
              <i class="fa fa-floppy-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>kategori" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo $dashboard['t_merk']?></h3>

              <p>Total Merk</p>
            </div>
            <div class="icon">
              <i class="fa fa-keyboard-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>merk" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $dashboard['t_model']?></h3>

              <p>Total Model</p>
            </div>
            <div class="icon">
              <i class="fa fa-tint"></i>
            </div>
            <a href="<?php echo base_url(); ?>model" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-9 col-xs-6">
        <div class="box">
          <!-- small box -->
          <div class="table-responsive">
            <div class="box-header with-border">
              <h3 class="box-title">AKTIVITAS TERBARU</h3> <i class="pull-right">(<a href="<?php echo base_url(); ?>admin/data_log">Lihat Semua</a>)</i>
            </div>

              <table id="" class="table table-striped" style="text-transform: uppercase;">
                <thead>
                <tr>
                  <th class="col-sm-2" data-field="created_at" style="text-align: center">Waktu</th>
                        <th class="col-sm-2" data-field="admin" style="text-align: center">User</th>
                        <th class="col-sm-2" data-field="action_type" style="text-align: center">Aksi</th>
                        <th class="col-sm-4" data-field="item" style="text-align: center">Item</th>
                        <th class="col-sm-2" data-field="target" style="text-align: center"> Transfer Ke </th>
                </tr>
                </thead>
                <tbody>

                
                  
                <?php 
                      $no = 0;
                      foreach($log as $data):
                      ;
                    ?>
                    <tr>
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
      </div>
        