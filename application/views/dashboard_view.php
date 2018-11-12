 <section class="content">
      <div class="row">     
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo $dashboard['t_pegawai']?></h3>

              <p>Total Pegawai</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?php echo base_url(); ?>pegawai" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
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
      </div>
    </section>
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.js"></script>
    <script>
  $(function () {
    var t_status_pegawai = <?= $dashboard['t_status_pegawai'] ?>;
    var t_jenis_pegawai = <?= $dashboard['t_jenis_pegawai'] ?>;
    var ctx = document.getElementById("chart-area").getContext("2d");
    var myPie = new Chart(ctx).Pie(t_status_pegawai);

    var ctx2 = document.getElementById("chart-area2").getContext("2d");
    var myPie2 = new Chart(ctx2).Pie(t_jenis_pegawai);

    
  });
</script>