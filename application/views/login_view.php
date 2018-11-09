<!DOCTYPE html>
<html>
  <head>
    <title>STIE Jakarta International College</title>
    <link href='logo.png' rel='shortcut icon'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  </head>
  <body class="hold-transition lockscreen">
    <div class="container" style="padding-top: 150px;">
      <div class="row">

        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
          <?php echo $this->session->flashdata('message'); ?>
          <?php echo $this->session->flashdata('message2'); ?>
          <div class="panel panel-default">
            <div class="panel-heading"><h4>Sistem Informasi Akademik</h4></div>
              <div class="panel-body">
              <form action="<?php echo base_url('login/login'); ?>" name="form-login" id="form-login" method="post" onsubmit="return validateForm()">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input type="text" id="username" name="username" autofocus value="" required="" placeholder="Username" class="form-control" />
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" id="password" name="password" autofocus value="" required="" placeholder="Password" class="form-control" />
                </div>
                <br>
                <div class="g-recaptcha" data-sitekey="6LdJNXEUAAAAAFTF9Mli1NghDiiTI9doXUlREvh3"></div>
                <font color="red"><span id="myspan"> </font></span>
                <br>
                <input type="submit" name="submit" value="LOGIN" class="btn btn-block btn-sm btn-primary">
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
      </div>
    </div>
  </body>
</html>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">
  function validateForm() {
    var x = document.forms["form-login"]["g-recaptcha-response"].value;
    if (x == "") {
        document.getElementById("myspan").textContent="Captcha Tidak Valid";
        return false;
    } else {
      document.getElementById("myspan").textContent=" ";
    }
}
</script>