 <section class="content">
      <div class="row">     
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo $dashboard['t_pegawai_aktif']?></h3>

              <p>Total Pegawai Aktif</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo base_url(); ?>pegawai" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $dashboard['t_pegawai_non_aktif']?></h3>

              <p>Total Pegawai Non Aktif</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?php echo base_url(); ?>pegawai" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $dashboard['t_divisi']?></h3>

              <p>Total Divisi</p>
            </div>
            <div class="icon">
              <i class="fa fa-barcode"></i>
            </div>
            <a href="<?php echo base_url(); ?>master/divisi" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          
        </div>
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $dashboard['t_campus']?></h3>

              <p>Total Kampus</p>
            </div>
            <div class="icon">
              <i class="fa fa-building"></i>
            </div>
            <a href="<?php echo base_url(); ?>master/campus" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="box box-body">
            <center>
            <div id="canvas-holder">
                <canvas id="chart-area" width="125" height="125"/>
            </div>
            <label>Chart per Status Pegawai</label>
            </center>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="box box-body">
            <center>
              <div id="canvas-holder">
                <canvas id="chart-area2" width="125" height="125"/>
              </div>
              <label>Chart per Jenis Pegawai</label>
            </center>
          </div>
          
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="box box-body">
            <center>
              <div id="canvas-holder">
                <canvas id="chart-area3" width="125" height="125"/>
              </div>
              <label>Chart per Divisi Pegawai</label>
            </center>
          </div>
          
        </div>
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="box box-body">
            <center>
              <div id="canvas-holder">
                <canvas id="chart-area4" width="125" height="125"/>
              </div>
              <label>Chart per Lokasi Pegawai</label>
            </center>
          </div>
          
        </div>
      </div>
    </section>
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.js"></script>
    <script>
  $(function () {
    var t_status_pegawai = <?= $dashboard['t_status_pegawai'] ?>;
    var t_jenis_pegawai = <?= $dashboard['t_jenis_pegawai'] ?>;
    var t_divisi_pegawai = <?= $dashboard['t_divisi_pegawai'] ?>;
    var t_campus_pegawai = <?= $dashboard['t_campus_pegawai'] ?>;

    var ctx = document.getElementById("chart-area").getContext("2d");
    var myPie = new Chart(ctx).Pie(t_status_pegawai);

    var ctx2 = document.getElementById("chart-area2").getContext("2d");
    var myPie2 = new Chart(ctx2).Pie(t_jenis_pegawai);

    var ctx3 = document.getElementById("chart-area3").getContext("2d");
    var myPie3 = new Chart(ctx3).Pie(t_divisi_pegawai);

    var ctx4 = document.getElementById("chart-area4").getContext("2d");
    var myPie4 = new Chart(ctx4).Pie(t_campus_pegawai);    
  });
</script>