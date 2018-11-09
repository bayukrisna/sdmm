<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ruang_model');
		$this->load->model('Barang_model');
		$this->load->helper(array('url','download'));
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect('login');
		}
	}
	public function index()
	{
			$data['kategori'] = $this->Barang_model->data_kategori_barang();
			$data['main_view'] = 'Barang/kategori_barang_view';
			$this->load->view('template', $data);
	}

	public function data_barang()
	{
			$id_kategori = $this->uri->segment(3);
			$data['kategori'] = $this->Barang_model->detail_kategori($id_kategori);
			$data['barang'] = $this->Barang_model->data_barang($id_kategori);
			$data['main_view'] = 'Barang/barang_view';
			$this->load->view('template', $data);
	}

	public function data_aset()
	{
			$data['barang'] = $this->Barang_model->data_barang_semua();
			$data['main_view'] = 'Barang/data_barang_view';
			$this->load->view('template', $data);
	}

	public function detail_barang()
	{
			$id_barang = $this->uri->segment(3);
			$data['riwayat'] = $this->Barang_model->data_riwayat($id_barang);
			$data['barang'] = $this->Barang_model->detail_barang($id_barang);
			$data['getTipe'] = $this->Barang_model->getTipe();
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['pemeliharaan'] = $this->Barang_model->data_pemeliharaan($id_barang);
			$data['berkas'] = $this->Barang_model->data_berkas($id_barang);
			$data['main_view'] = 'Barang/detail_barang_view';
			$this->load->view('template', $data);
	}

	public function page_edit_barang()
	{
			$id_barang = $this->uri->segment(3);
			$data['getLogBarang'] = $this->Barang_model->getLogBarang();
			$data['getPengguna'] = $this->Barang_model->getPengguna();
			$data['getKategori'] = $this->Barang_model->getKategori();
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['getMerk'] = $this->Barang_model->getMerk();
			$data['getPerusahaan'] = $this->Barang_model->getPerusahaan();
			$data['getStatus'] = $this->Barang_model->getStatus();
			$data['getStatus'] = $this->Barang_model->getStatus();
			$data['barang'] = $this->Barang_model->detail_barang($id_barang);
			$data['main_view'] = 'Barang/edit_barang_view';
			$this->load->view('template', $data);
	}

	public function tambah_barang_by_kategori()
	{
			$id_kategori = $this->uri->segment(3);
			$data['getLogBarang'] = $this->Barang_model->getLogBarang();
			$data['getPengguna'] = $this->Barang_model->getPengguna();
			$data['getKategori'] = $this->Barang_model->getKategori();
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['getMerk'] = $this->Barang_model->getMerk();
			$data['getPerusahaan'] = $this->Barang_model->getPerusahaan();
			$data['getStatus'] = $this->Barang_model->getStatus();
			$data['kategori'] = $this->Barang_model->detail_kategori($id_kategori);
			$data['main_view'] = 'Barang/tambah_barang_view';
			$this->load->view('template', $data);
	}

	public function tambah_barang()
	{
			$data['getLogBarang'] = $this->Barang_model->getLogBarang();
			$data['getPengguna'] = $this->Barang_model->getPengguna();
			$data['getKategori'] = $this->Barang_model->getKategori();
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['getMerk'] = $this->Barang_model->getMerk();
			$data['getPerusahaan'] = $this->Barang_model->getPerusahaan();
			$data['getStatus'] = $this->Barang_model->getStatus();
			$data['main_view'] = 'Barang/tambah_barang2_view';
			$this->load->view('template', $data);
	}

	public function ldapku(){
		$adServer = "10.10.0.1";
	
				    $ldap = ldap_connect($adServer);
				    $username = 'bayu.krisna';
				    $password = '12345678';

				    $ldaprdn = $username.'@jic.ac.id';

				    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
				    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

				    $bind = @ldap_bind($ldap, $ldaprdn, $password);
				    if ($bind) {
				        $filter="(sAMAccountName=*)";
				        $result = ldap_search($ldap,"dc=jic,dc=ac,dc=id",$filter);
				        $info = ldap_get_entries($ldap, $result);
				        foreach ($info as $sess) {
				        	$tes[] = array('username' =>  $sess['cn'][0]);
			            }
			        }
			        return $tes;

	}

	public function get_merk_by_kategori($param = NULL){
		$id_kategori = $param;
		$result = $this->Barang_model->get_merk_by_kategori($id_kategori);
		$option = "";
		$option .= '<option value=""> Pilih Merk </option>';
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->id_merk."'>".$data->merk."</option>";
			
		}
		echo $option;
	}

	public function get_model_by_mk(){
		$id_kategori = $this->input->post('id_kategori');
		$id_merk = $this->input->post('id_merk');
		$result = $this->Barang_model->get_model_by_mk($id_merk, $id_kategori);
		$option = "";
		$option .= '<option value=""> Pilih Model </option>';
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->id_model."'>".$data->nama_model."</option>";
			
		}
		echo $option;
	}

	public function get_ruang_by_perusahaan($param = NULL){
		$id_perusahaan = $param;
		$result = $this->Barang_model->get_ruang_by_perusahaan($id_perusahaan);
		$option = "";
		$option .= '<option value=""> Pilih Ruang </option>';
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->id_ruang."'>".$data->nama_ruang."</option>";
			
		}
		echo $option;
	}

	
	public function status()
	{
			$data['status'] = $this->Barang_model->data_status();
			$data['main_view'] = 'Status/status_view';
			$this->load->view('template', $data);
	}

	public function simpan_barang()
	{
		$id_kategori = $this->uri->segment(3);
		$id_barang = $this->uri->segment(4);
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto_barang');
			if($this->Barang_model->simpan_barang($this->upload->data()) == TRUE && $this->Barang_model->simpan_log_barang($id_barang) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Barang berhasil disimpan </div>');
            	redirect('barang/tambah_barang_by_kategori/'.$id_kategori);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/tambah_barang_by_kategori/'.$id_kategori);
		}
	}

	public function simpan_barang2()
	{
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto_barang');
			if($this->Barang_model->simpan_barang($this->upload->data()) == TRUE && $this->Barang_model->simpan_log_barang() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Barang berhasil disimpan </div>');
            	redirect('barang/tambah_barang');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/tambah_barang');
		}
	}


	public function simpan_status()
	{
			if($this->Barang_model->simpan_status() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data status berhasil disimpan </div>');
            	redirect('barang/status');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/status');
		}
	}

	public function edit_status()
	{
		$id_status = $this->input->post('id_status');
			if($this->Barang_model->edit_status($id_status) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Status Berhasil Diubah </div>');
            	redirect('barang/status');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/status');
		}
	}

	public function edit_barang($id_barang){
			$nama_barang = $this->input->post('nama_barang');
					if ($this->Barang_model->edit_barang($id_barang) == TRUE  && $this->Barang_model->log_edit_barang($id_barang) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$nama_barang.' berhasil </div>');
            			redirect('barang/data_aset');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$nama_barang.' gagal </div>');
            			redirect('barang/data_aset');
					}
		} 

	public function simpan_pemeliharaan()
	{
		$id_barang = $this->uri->segment(3);
			if($this->Barang_model->simpan_pemeliharaan() == TRUE && $this->Barang_model->log_simpan_pemeliharaan($id_barang) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data pemeliharaan berhasil disimpan </div>');
            	redirect('barang/detail_barang/'.$id_barang);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/detail_barang/'.$id_barang);
		}
	}

	public function simpan_berkas()
	{
		$id_barang = $this->uri->segment(3);
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf|doc|docx|txt|gif';
        $this->load->library('upload', $config);
        $this->upload->do_upload('nama_berkas');
			if($this->Barang_model->simpan_berkas($this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Berkas berhasil disimpan </div>');
            	redirect('barang/detail_barang/'.$id_barang);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/detail_barang/'.$id_barang);
		}
	}

	public function download_berkas(){				
		force_download('uploads/'.$this->uri->segment(3),NULL);
	}


	public function hapus_status(){
		$id_status = $this->uri->segment(3);
		if ($this->Barang_model->hapus_status($id_status) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Status berhasil dihapus </div>');
			redirect('barang/status');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Status gagal dihapus </div>');
			redirect('barang/status');
		}
	}

	public function hapus_barang(){
		$id_barang = $this->uri->segment(3);
		if ($this->Barang_model->hapus_barang($id_barang) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Hapus Berhasil </div>');
			redirect('barang/data_aset');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Hapus Gagal </div>');
			redirect('barang/data_aset');
		}
	}

	public function hapus_barang2(){
		$id_barang = $this->uri->segment(3);
		$id_kategori = $this->uri->segment(4);
		if ($this->Barang_model->hapus_barang($id_barang) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Hapus Berhasil </div>');
			redirect('barang/data_barang/'.$id_kategori);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Hapus Gagal </div>');
			redirect('barang/data_barang/'.$id_kategori);
		}
	}
}