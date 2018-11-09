<?php echo form_open('admin/update_akses/'.$cek->id_user, ' method="post" role="form" enctype="multipart/form-data"'); ?>
<div class="box">
<table class="table">
  <tr>
    <th> Barang </th>
    <th> Deny </th>
    <th> Allow </th>
  </tr>
  <tr>
    <td>View</td>
    <td><input type="radio" name="v_bar" value="0" <?php if($cek->v_bar == '0') echo 'checked=""' ?>></td>
    <td><input type="radio" name="v_bar" value="1" <?php if($cek->v_bar == '1') echo 'checked=""' ?>></td>
  </tr>
  <tr>
    <td>Create</td>
    <td><input type="radio" name="c_bar" value="0" <?php if($cek->c_bar == '0') echo 'checked=""' ?>></td>
    <td><input type="radio" name="c_bar"  value="1" <?php if($cek->c_bar == '1') echo 'checked=""' ?>></td>
  </tr>
  <tr>
    <td>Edit</td>
    <td><input type="radio" name="u_bar" value="0" <?php if($cek->u_bar == '0') echo 'checked=""' ?>></td>
    <td><input type="radio" name="u_bar"  value="1" <?php if($cek->u_bar == '1') echo 'checked=""' ?>></td>
  </tr>
  <tr>
    <td>Delete</td>
    <td><input type="radio" name="d_bar" value="0" <?php if($cek->d_bar == '0') echo 'checked=""' ?>></td>
    <td><input type="radio" name="d_bar"  value="1" <?php if($cek->d_bar == '1') echo 'checked=""' ?>></td>
  </tr>
</table>
</div>
<button class="btn btn-success pull-right"> Save </button>
<?php echo form_close();?>