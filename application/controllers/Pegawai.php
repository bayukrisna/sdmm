<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');
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
			if($this->pegawai_model->edit_pegawai($id_pegawai) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Status Berhasil Diubah </div>');
            	redirect('barang/status');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/status');
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
}