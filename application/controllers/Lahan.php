<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Lahan_model');
		$this->load->model('Barang_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect('login');
		}
	}

	public function index()
	{
			$data['lahan'] = $this->Lahan_model->data_lahan();
			$data['getPerusahaan'] = $this->Barang_model->getPerusahaan();
			$data['main_view'] = 'Lahan/lahan_view';
			$this->load->view('template', $data);
	}

	public function simpan_lahan()
	{
			if($this->Lahan_model->simpan_lahan() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data lahan berhasil disimpan </div>');
            	redirect('lahan');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('lahan');
		}
	}
	public function edit_lahan(){
			$id_periode = $this->input->post('id_lahan');
					if ($this->Lahan_model->edit_lahan($id_periode) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$id_periode.' berhasil . </div>');
            			redirect('Lahan');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$id_periode.' gagal . </div>');
            			redirect('Lahan');
					}
		} 
	public function delete($id_lahan){
		if ($this->db->where('id_lahan', $id_lahan)->delete('tb_lahan') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Hapus Lahan Berhasil </div>');
			redirect('lahan');
		} else {
			$this->session->set_flashdata('message', 'Hapus Lahan Berhasil');
			redirect('lahan');
		}
	}
}