<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Laporan_model');
	}

	public function pegawai(){
		$data['get_status_pegawai'] = $this->db->get('tb_status_pegawai')->result();
		$data['get_jenis_pegawai'] = $this->db->get('tb_jenis_pegawai')->result();
		$data['get_divisi'] = $this->db->get('tb_divisi')->result();
		$data['get_campus'] = $this->db->get('tb_campus')->result();
		$data['main_view'] = 'Laporan/laporan_pegawai_view';
		$this->load->view('template', $data);
	}
	
	function tampil_pegawai(){
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$tanggal_masuk2 = $this->input->post('tanggal_masuk2');
		$id_status_pegawai = $this->input->post('id_status_pegawai');
		$id_jp = $this->input->post('id_jp');
		$id_divisi = $this->input->post('id_divisi');
		$id_campus = $this->input->post('id_campus');
      	$a = $this->db->join('tb_campus', 'tb_campus.id_campus = tb_pegawai.id_campus' , 'left')
      					->join('tb_divisi', 'tb_divisi.id_divisi = tb_pegawai.id_divisi', 'left')
                        ->where('tb_pegawai.tgl_masuk >=', $tanggal_masuk)
                        ->where('tb_pegawai.tgl_masuk <=', $tanggal_masuk2)
                        ->like('tb_pegawai.id_status_pegawai' , $id_status_pegawai)
                        ->like('tb_pegawai.id_jp' , $id_jp)
                        ->like('tb_pegawai.id_divisi' , $id_divisi)
                        ->like('tb_pegawai.id_campus' , $id_campus)
                        ->get('tb_pegawai');
      	$result = $a->result();

                if ($a->num_rows() > 0)
                { 
                  $tanggal_masuk = date("d M Y", strtotime($tanggal_masuk));
                  $tanggal_masuk2 = date("d M Y", strtotime($tanggal_masuk2));
                  $no = 0;
                  $option = "";
                  $option .= '<section class="content" id="ea">
      <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
            <div class="box-body">
            <h4><b>Laporan Pegawai</h4></b>
            <table>
              <tr>
                <td width="120px">Tanggal Awal</td>
                <td width="300px">: '.$tanggal_masuk.'</td>
                <td width="120px">Tanggal Akhir</td>
                <td>: '.$tanggal_masuk2.'</td>
              </tr>
              <tr>
                <td width="120px">Jumlah Pegawai</td>
                <td width="300px">: '.count($result).'</td>
              </tr>
            </table>
            <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="1%">No</th>
                  <th>Nama Pegawai</th>
                  <th>No Telephone</th>
                  <th>Email</th>
                  <th>Tanggal Masuk</th>
                  <th>Divisi</th>
                  <th>Campus</th>
                </tr>
                </thead>
                <tbody>';
                  foreach ($result as $data) {
                    $option .= "
                    <tr>
                      <td>".++$no."</td>
                      <td>".$data->nama_pegawai."</td>
                      <td>".$data->no_telepon."</td>
                      <td>".$data->email."</td>
                      <td>".date("d M Y", strtotime($data->tgl_masuk))."</td>
                      <td>".$data->nama_campus."</td>
                      <td>".$data->nama_divisi."</td>
                    </tr>";
                    
                  }
                  $option .= '</tbody>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>';
                  echo $option;

                } else{
                $option = "";
                  $option .= '
                  <section class="content" id="ea">
      <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="1%">No</th>
                  <th>Nama Pegawai</th>
                  <th>Tempat Lahir</th>
                  <th>Alamat</th>
                  <th>No Telephone</th>
                  <th>Email</th>
                  <th>Tanggal Masuk</th>
                </tr>
                </thead>
                <tbody>
                  <td></td><td></td>
                  </tbody>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>';

                  echo $option;
                
                }
    }
}



