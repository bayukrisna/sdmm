<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gedung_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect('login');
		}
	}

	public function index()
	{
			$data['gedung'] = $this->Gedung_model->data_gedung();
			$data['getStatus'] = $this->Gedung_model->drop_status();
			$data['getLahan'] = $this->Gedung_model->drop_lahan();
			$data['main_view'] = 'Gedung/gedung_view';
			$this->load->view('template', $data);
	}

	public function simpan_gedung()
	{
			if($this->Gedung_model->simpan_gedung() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data gedung berhasil disimpan </div>');
            	redirect('gedung');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('gedung');
		}
	}
	public function edit_gedung(){
			$id_gedung = $this->input->post('id_gedung');
			$nama_gedung = $this->input->post('nama_gedung');
					if ($this->Gedung_model->edit_gedung($id_gedung) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$nama_gedung.' berhasil . </div>');
            			redirect('gedung');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$nama_gedung.' gagal . </div>');
            			redirect('Gedung');
					}
		} 
}