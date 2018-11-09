      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA Library</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped table-hover" style="text-transform: uppercase;">

                <a href="<?= base_url('Library/tambah_buku') ?>"  class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>

                <thead>
                <tr>
                  <th>ID Number</th>
                  <th>Subject Heading</th>
                  <th>CLASSIFICATION</th>
                  <th>BOOK Title</th>
                  <th>Subtitle</th>
                  <th>Author</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

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
        