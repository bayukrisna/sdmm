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
		$data['main_view'] = 'Laporan/laporan_pegawai_view';
		$this->load->view('template', $data);
	}
	public function tampil_pegawai(){
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$tanggal_masuk2 = $this->input->post('tanggal_masuk2');
		$id_status_pegawai = $this->input->post('id_status_pegawai');
		$id_jp = $this->input->post('id_jp');
		$a = $this->db
                        ->where('tb_pegawai.tgl_masuk >=', $tanggal_masuk)
                        ->where('tb_pegawai.tgl_masuk <=', $tanggal_masuk2)
                        ->like('tb_pegawai.id_status_pegawai' , $id_status_pegawai)
                        ->like('tb_pegawai.id_jp' , $id_jp)
                        ->get('tb_pegawai')
                        ->result();
                $c = 0;
        foreach ($a as $key) {
			
			$arrayName[] = array(++$c,$key->nama_pegawai,$key->tempat_lahir,$key->alamat,$key->no_telepon,$key->email);	
		}
		echo json_encode($arrayName);
		
	}
}



