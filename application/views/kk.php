<!DOCTYPE html>
<html>
<head>
  <title>JQuery LazzyNumeric</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://stuff.w3shaman.com/jquery-plugins/lazzynumeric/js/autoNumeric.js"></script>
  <script src="http://stuff.w3shaman.com/jquery-plugins/lazzynumeric/js/jquery.lazzynumeric.js"></script>
</head>
<body>
  <h1>JQuery LazzyNumeric</h1>
  <p>The plugin for the laziest web developer to format the number with thousand separator on typing. This plugin extends the <b>autoNumeric</b> plugin (<a href="http://www.decorplanit.com/plugin/" target="_blank">http://www.decorplanit.com/plugin/</a>) so when the form is submitted the number format will be cleared and you don't need to do anything to clear the format at your server side script.</p>
  <?php
  $item_name = "";
  $item_qty = "";
  $item_price1 = "";
  $item_price2 = "";

  // Check submitted value to see if the number format is cleared.
  if (isset($_POST["submit"])) {
    $item_name = $_POST["item_name"];
    $item_qty = $_POST["item_qty"];
    $item_price1 = $_POST["item_price1"];
    $item_price2 = $_POST["item_price2"];

    // Display the posted value.
    echo '<div style="border:1px solid #999;background-color:#ddd">';
    echo 'Hooray the value is back to the pure number!';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    echo '</div><br/>';
  }
  ?>
  <form action="" method="post">
    <table>
      <tr><td>Item name</td><td>:</td><td><input type="text" name="item_name" value="<?php echo $item_name ?>" /></td></tr>
      <tr><td>Qty</td><td>:</td><td><input type="text" name="item_qty" class="numeric" value="<?php echo $item_qty ?>" /></td></tr>
      <tr><td>Price 1</td><td>:</td><td><input type="text" name="item_price1" class="numeric" value="<?php echo $item_price1 ?>" /></td></tr>
      <tr><td>Price 2</td><td>:</td><td><input type="text" name="item_price2" class="numeric" value="<?php echo $item_price2 ?>" /></td></tr>
    </table>
    <br/>
    <input type="submit" name="submit" id="submit" />
  </form>
  <p style="font-size:16pt">JQuery LazzyNumeric can also be used safely in the dynamic table. See the example <a href="dynamic-table.php">there</a>.</p>
  <script>
    $(".numeric").lazzynumeric();
    $('.numeric').keyup(function(){
    while(! /^(([0-9]+)((\.|,)([0-9]{0,2}))?)?$/.test($('.numeric').val())){
        
    }
});
  </script>
</body>
</html>
