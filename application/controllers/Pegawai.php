<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect('login');
		}
	}
	public function index()
	{
			$data['pegawai'] = $this->pegawai_model->data_pegawai();
			$data['main_view'] = 'Pegawai/data_pegawai_view';
			$this->load->view('template', $data);
	}

	public function tambah_pegawai()
	{
			$data['getJenisPegawai'] = $this->pegawai_model->getJenisPegawai();
			$data['main_view'] = 'Pegawai/tambah_pegawai_view';
			$this->load->view('template', $data);
	}

	public function detail_pegawai()
	{
			$id_pegawai = $this->uri->segment(3);
			$data['pegawai'] = $this->pegawai_model->detail_pegawai($id_pegawai);
			$data['main_view'] = 'Pegawai/detail_pegawai_view';
			$this->load->view('template', $data);
	}

	public function simpan_pegawai()
	{
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto_pegawai');
			if($this->pegawai_model->simpan_pegawai($this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data pegawai berhasil disimpan </div>');
            	redirect('pegawai');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('pegawai');
		}
	}

	public function edit_pegawai()
	{
			$id_pegawai = $this->uri->segment(3);
			$data['getJenisPegawai'] = $this->pegawai_model->getJenisPegawai();
			$data['getStatusPegawai'] = $this->pegawai_model->getStatusPegawai();
			$data['pegawai'] = $this->pegawai_model->detail_pegawai($id_pegawai);
			$data['main_view'] = 'Pegawai/edit_pegawai_view';
			$this->load->view('template', $data);
	}

	public function simpan_edit_pegawai()
	{
		$id_pegawai = $this->uri->segment(3);
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto_pegawai');
			if($this->pegawai_model->simpan_edit_pegawai($id_pegawai, $this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data pegawai berhasil diubah </div>');
            	redirect('pegawai');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('pegawai');
		}
	}


	public function hapus_pegawai(){
		$id_pegawai = $this->uri->segment(3);
		if ($this->pegawai_model->hapus_pegawai($id_pegawai) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Data pegawai berhasil dihapus </div>');
			redirect('pegawai');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Status gagal dihapus </div>');
			redirect('pegawai');
		}
	}

	public function keluarga()
	{
			$id_pegawai = $this->uri->segment(3);
			$data['pegawai'] = $this->pegawai_model->detail_pegawai($id_pegawai);
			$data['keluarga'] = $this->pegawai_model->data_keluarga($id_pegawai);
			$data['main_view'] = 'Pegawai/keluarga_pegawai_view';
			$this->load->view('template', $data);
	}

	public function simpan_keluarga()
	{
		$id_pegawai = $this->uri->segment(3);
			if($this->pegawai_model->simpan_keluarga($id_pegawai) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data keluarga pegawai berhasil ditambah </div>');
            	redirect('pegawai/keluarga/'.$id_pegawai);
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data keluarga pegawai gagal ditambah </div>');
            	redirect('pegawai/keluarga/'.$id_pegawai);
			} 
	} 

	public function hapus_keluarga(){
		$id_keluarga = $this->uri->segment(3);
		$id_pegawai = $this->uri->segment(4);
		if ($this->pegawai_model->hapus_keluarga($id_keluarga) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Data keluarga pegawai berhasil dihapus </div>');
			redirect('pegawai/keluarga/'.$id_pegawai);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data keluarga pegawai gagal dihapus </div>');
			redirect('pegawai/keluarga/'.$id_pegawai);
		}
	}

	public function jabatan()
	{
			$id_pegawai = $this->uri->segment(3);
			$data['pegawai'] = $this->pegawai_model->detail_pegawai($id_pegawai);
			$data['jabatan'] = $this->pegawai_model->data_jabatan($id_pegawai);
			$data['main_view'] = 'Pegawai/jabatan_pegawai_view';
			$this->load->view('template', $data);
	}

	public function simpan_jabatan()
	{
		$id_pegawai = $this->uri->segment(3);
			if($this->pegawai_model->simpan_jabatan($id_pegawai) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data keluarga pegawai berhasil ditambah </div>');
            	redirect('pegawai/jabatan/'.$id_pegawai);
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data keluarga pegawai gagal ditambah </div>');
            	redirect('pegawai/jabatan/'.$id_pegawai);
			} 
	} 

	public function hapus_jabatan(){
		$id_jabatan = $this->uri->segment(3);
		$id_pegawai = $this->uri->segment(4);
		if ($this->pegawai_model->hapus_jabatan($id_jabatan) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Data jabatan pegawai berhasil dihapus </div>');
			redirect('pegawai/jabatan/'.$id_pegawai);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data jabatan pegawai gagal dihapus </div>');
			redirect('pegawai/jabatan/'.$id_pegawai);
		}
	}

	public function pendidikan()
	{
			$id_pegawai = $this->uri->segment(3);
			$data['pegawai'] = $this->pegawai_model->detail_pegawai($id_pegawai);
			$data['pendidikan'] = $this->pegawai_model->data_pendidikan($id_pegawai);
			$data['main_view'] = 'Pegawai/pendidikan_pegawai_view';
			$this->load->view('template', $data);
	}

	public function simpan_pendidikan()
	{
		$id_pegawai = $this->uri->segment(3);
			if($this->pegawai_model->simpan_pendidikan($id_pegawai) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data pendidikan pegawai berhasil ditambah </div>');
            	redirect('pegawai/pendidikan/'.$id_pegawai);
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data pendidikan pegawai gagal ditambah </div>');
            	redirect('pegawai/pendidikan/'.$id_pegawai);
			} 
	} 

	public function hapus_pendidikan(){
		$id_pendidikan = $this->uri->segment(3);
		$id_pegawai = $this->uri->segment(4);
		if ($this->pegawai_model->hapus_pendidikan($id_pendidikan) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Data pendidikan pegawai berhasil dihapus </div>');
			redirect('pegawai/pendidikan/'.$id_pegawai);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data pendidikan pegawai gagal dihapus </div>');
			redirect('pegawai/pendidikan/'.$id_pegawai);
		}
	}

	public function pelatihan()
	{
			$id_pegawai = $this->uri->segment(3);
			$data['pegawai'] = $this->pegawai_model->detail_pegawai($id_pegawai);
			$data['pelatihan'] = $this->pegawai_model->data_pelatihan($id_pegawai);
			$data['main_view'] = 'Pegawai/pelatihan_pegawai_view';
			$this->load->view('template', $data);
	}

	public function simpan_pelatihan()
	{
		$id_pegawai = $this->uri->segment(3);
			if($this->pegawai_model->simpan_pelatihan($id_pegawai) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data pelatihan pegawai berhasil ditambah </div>');
            	redirect('pegawai/pelatihan/'.$id_pegawai);
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data pelatihan pegawai gagal ditambah </div>');
            	redirect('pegawai/pelatihan/'.$id_pegawai);
			} 
	} 

	public function hapus_pelatihan(){
		$id_pelatihan = $this->uri->segment(3);
		$id_pegawai = $this->uri->segment(4);
		if ($this->pegawai_model->hapus_pelatihan($id_pelatihan) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Data pelatihan pegawai berhasil dihapus </div>');
			redirect('pegawai/pelatihan/'.$id_pegawai);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data pelatihan pegawai gagal dihapus </div>');
			redirect('pegawai/pelatihan/'.$id_pegawai);
		}
	}

	public function seminar()
	{
			$id_pegawai = $this->uri->segment(3);
			$data['pegawai'] = $this->pegawai_model->detail_pegawai($id_pegawai);
			$data['seminar'] = $this->pegawai_model->data_seminar($id_pegawai);
			$data['main_view'] = 'Pegawai/seminar_pegawai_view';
			$this->load->view('template', $data);
	}

	public function simpan_seminar()
	{
		$id_pegawai = $this->uri->segment(3);
			if($this->pegawai_model->simpan_seminar($id_pegawai) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data seminar pegawai berhasil ditambah </div>');
            	redirect('pegawai/seminar/'.$id_pegawai);
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data seminar pegawai gagal ditambah </div>');
            	redirect('pegawai/seminar/'.$id_pegawai);
			} 
	} 

	public function hapus_seminar(){
		$id_seminar = $this->uri->segment(3);
		$id_pegawai = $this->uri->segment(4);
		if ($this->pegawai_model->hapus_seminar($id_seminar) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Data seminar pegawai berhasil dihapus </div>');
			redirect('pegawai/seminar/'.$id_pegawai);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data seminar pegawai gagal dihapus </div>');
			redirect('pegawai/seminar/'.$id_pegawai);
		}
	}

	public function penghargaan()
	{
			$id_pegawai = $this->uri->segment(3);
			$data['pegawai'] = $this->pegawai_model->detail_pegawai($id_pegawai);
			$data['penghargaan'] = $this->pegawai_model->data_penghargaan($id_pegawai);
			$data['main_view'] = 'Pegawai/penghargaan_pegawai_view';
			$this->load->view('template', $data);
	}

	public function simpan_penghargaan()
	{
		$id_pegawai = $this->uri->segment(3);
			if($this->pegawai_model->simpan_penghargaan($id_pegawai) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data penghargaan pegawai berhasil ditambah </div>');
            	redirect('pegawai/penghargaan/'.$id_pegawai);
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data penghargaan pegawai gagal ditambah </div>');
            	redirect('pegawai/penghargaan/'.$id_pegawai);
			} 
	} 

	public function hapus_penghargaan(){
		$id_penghargaan = $this->uri->segment(3);
		$id_pegawai = $this->uri->segment(4);
		if ($this->pegawai_model->hapus_penghargaan($id_penghargaan) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Data penghargaan pegawai berhasil dihapus </div>');
			redirect('pegawai/penghargaan/'.$id_pegawai);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data penghargaan pegawai gagal dihapus </div>');
			redirect('pegawai/penghargaan/'.$id_pegawai);
		}
	}

	public function hukuman()
	{
			$id_pegawai = $this->uri->segment(3);
			$data['pegawai'] = $this->pegawai_model->detail_pegawai($id_pegawai);
			$data['hukuman'] = $this->pegawai_model->data_hukuman($id_pegawai);
			$data['main_view'] = 'Pegawai/hukuman_pegawai_view';
			$this->load->view('template', $data);
	}

	public function simpan_hukuman()
	{
		$id_pegawai = $this->uri->segment(3);
			if($this->pegawai_model->simpan_hukuman($id_pegawai) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data hukuman pegawai berhasil ditambah </div>');
            	redirect('pegawai/hukuman/'.$id_pegawai);
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data hukuman pegawai gagal ditambah </div>');
            	redirect('pegawai/hukuman/'.$id_pegawai);
			} 
	} 

	public function hapus_hukuman(){
		$id_hukuman = $this->uri->segment(3);
		$id_pegawai = $this->uri->segment(4);
		if ($this->pegawai_model->hapus_hukuman($id_hukuman) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Data hukuman pegawai berhasil dihapus </div>');
			redirect('pegawai/hukuman/'.$id_pegawai);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data hukuman pegawai gagal dihapus </div>');
			redirect('pegawai/hukuman/'.$id_pegawai);
		}
	}

	public function cuti()
	{
			$id_pegawai = $this->uri->segment(3);
			$data['pegawai'] = $this->pegawai_model->detail_pegawai($id_pegawai);
			$data['cuti'] = $this->pegawai_model->data_cuti($id_pegawai);
			$data['main_view'] = 'Pegawai/cuti_pegawai_view';
			$this->load->view('template', $data);
	}

	public function simpan_cuti()
	{
		$id_pegawai = $this->uri->segment(3);
			if($this->pegawai_model->simpan_cuti($id_pegawai) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data cuti pegawai berhasil ditambah </div>');
            	redirect('pegawai/cuti/'.$id_pegawai);
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data cuti pegawai gagal ditambah </div>');
            	redirect('pegawai/cuti/'.$id_pegawai);
			} 
	} 

	public function hapus_cuti(){
		$id_cuti = $this->uri->segment(3);
		$id_pegawai = $this->uri->segment(4);
		if ($this->pegawai_model->hapus_cuti($id_cuti) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Data cuti pegawai berhasil dihapus </div>');
			redirect('pegawai/cuti/'.$id_pegawai);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data cuti pegawai gagal dihapus </div>');
			redirect('pegawai/cuti/'.$id_pegawai);
		}
	}
}