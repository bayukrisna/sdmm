<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jakarta International College</title>
  <link rel="icon" type=”image/png” href="<?php echo base_url(); ?>uploads/logo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleku.css">

  <!-- Font Awesome -->
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">

  <!-- asdsdada -->  <!-- asdsdada -->  <!-- asdsdada -->  <!-- asdsdada -->  <!-- asdsdada -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Bootstrap 3.3.6 -->
  

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">

  

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  
  <!-- asdasdsad -->  <!-- asdsdada -->  <!-- asdsdada -->  <!-- asdsdada -->  <!-- asdsdada -->


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style>
a {
    position: relative;
    display: inline-block;
}

a .tooltiptext {
    visibility: hidden;
    width: 100px;
    background-color: #5f5f5f;
    color: #f1f1f1;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    bottom: 120%;
    margin-left: -60px;
}

a:hover .tooltiptext {
    visibility: visible;


}
</style>

<style type="text/css">
    .ui-autocomplete {
  z-index: 215000000 !important;
}
</style>  

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header" >
    <!-- Logo -->
    <a href="../../index2.html" class="logo" style="background-color: maroon">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>JIC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?php echo base_url(); ?>/assets/img/STIE JIC-WHITE-01.png" alt="User Image" style="border: none;width: 120px;margin-top: -10px;"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: maroon">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="background-color: maroon">
        
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>/assets/img/JIC-WHITE-02.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username');
               ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="background-color: maroon">
                <img src="<?php echo base_url(); ?>/assets/img/JIC-WHITE-02.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('username'); ?>
                  <small>JIC | SISTEM SARANA & PRASARANA</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>admin/user_log/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-default fa fa-detail">History</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>login/logout" class="btn btn-default fa fa-sign-out">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
         <li <?php if($this->uri->segment(1) == 'dashboard') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
        
        <li class="treeview <?php if($this->uri->segment(1) == 'perusahaan' OR $this->uri->segment(2) == 'status' OR $this->uri->segment(1) == 'kategori' OR $this->uri->segment(1) == 'merk' OR $this->uri->segment(1) == 'model' OR $this->uri->segment(1) == 'supplier') echo 'active'; else echo  '';?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>MASTER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($this->uri->segment(1) == 'perusahaan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>perusahaan"><i class="fa fa-circle-o"></i>PERUSAHAAN</a></li>
            <li <?php if($this->uri->segment(2) == 'status') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>barang/status"><i class="fa fa-circle-o"></i>STATUS</a></li>
            <li <?php if($this->uri->segment(1) == 'kategori') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>kategori"><i class="fa fa-circle-o"></i>KATEGORI BARANG</a></li>
            <li <?php if($this->uri->segment(1) == 'merk') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>merk"><i class="fa fa-circle-o"></i>MERK / BRAND</a></li>
            <li <?php if($this->uri->segment(1) == 'model') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>model"><i class="fa fa-circle-o"></i>MODEL / TIPE</a></li>
            <li <?php if($this->uri->segment(1) == 'supplier') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>supplier"><i class="fa fa-circle-o"></i>PEMASOK / SUPPLIER</a></li>

          </ul>
        </li>
        <li class="treeview <?php if($this->uri->segment(2) == 'user_login' OR $this->uri->segment(2) == 'data_log' OR $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '') echo 'active'; else echo  '';?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>PENGGUNA (<i>USER</i>)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>admin"><i class="fa fa-circle-o"></i>SEMUA</a></li>
            <li <?php if($this->uri->segment(2) == 'user_login') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>admin/user_login"><i class="fa fa-circle-o"></i>USER LOGIN</a></li>
            <li <?php if($this->uri->segment(2) == 'data_log') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>admin/data_log"><i class="fa fa-circle-o"></i>AKTIVITAS USER</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($this->uri->segment(1) == 'lahan' OR $this->uri->segment(1) == 'gedung' OR $this->uri->segment(1) == 'ruang' ) echo 'active'; else echo  '';?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>PRASARANA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($this->uri->segment(1) == 'lahan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>lahan"><i class="fa fa-circle-o"></i>LAHAN</a></li>
            <li <?php if($this->uri->segment(1) == 'gedung') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>gedung"><i class="fa fa-circle-o"></i>GEDUNG / BANGUNAN</a></li>
            <li <?php if($this->uri->segment(1) == 'ruang') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>ruang"><i class="fa fa-circle-o"></i>RUANG</a></li>
          </ul>
        </li>
        <?php $c =  $this->db->where('id_user', $this->session->userdata('id_user'))->get('tb_akses')->row();
        if ($c->v_bar == 1) { ?>
        <li class="treeview <?php if($this->uri->segment(2) == 'data_aset' OR $this->uri->segment(1) == 'barang' && $this->uri->segment(2) == '') echo 'active'; else echo  '';?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>SARANA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview <?php if($this->uri->segment(2) == 'data_aset' OR $this->uri->segment(1) == 'barang' && $this->uri->segment(2) == '') echo 'active'; else echo  '';?>">
          <a href="#">
            <i class="fa fa-circle-o"></i> <span>BARANG / ASET</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($this->uri->segment(2) == 'data_aset') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>barang/data_aset"><i class="fa fa-circle-o"></i>SEMUA</a></li>
            <li <?php if($this->uri->segment(1) == 'barang' && $this->uri->segment(2) == '') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>barang"><i class="fa fa-circle-o"></i>PER KATEGORI</a></li>
          </ul>
        </li>
          </ul>
        </li>
      <?php } ?>
        <li class="treeview <?php if($this->uri->segment(2) == 'laporan_barang' OR $this->uri->segment(2) == 'laporan_pemeliharaan') echo 'active'; else echo  '';?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>LAPORAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($this->uri->segment(2) == 'laporan_barang') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_barang"><i class="fa fa-circle-o"></i>LAPORAN BARANG</a></li>
            <li <?php if($this->uri->segment(2) == 'laporan_pemeliharaan') echo 'class="active"'; else echo  '';?>><a href="<?php echo base_url(); ?>laporan/laporan_pemeliharaan"><i class="fa fa-circle-o"></i>LAPORAN PEMELIHARAAN</a></li>
          </ul>
        </li>
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <?php $this->load->view($main_view); ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
    </div>


  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- FastClick -->
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- Page specific script -->
<!-- <script>
  
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        });

      });
    }

    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
       eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
      //Random default events
      events: <?php echo $calendar;?>,
      editable: false,
      droppable: false, // this allows things to be dropped onto the calendar !!!
      drop: function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);

        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

        // is the "remove after drop" checkbox checked?
        

      }


    });
    
  });
</script> -->

<!-- Bootstrap 3.3.6 -->
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>

 <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>


    
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
  
<script src="<?php echo base_url(); ?>assets/js/pages/tables/jquery-datatable.js"></script>
<!-- SlimScroll 1.3.0 -->

<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
