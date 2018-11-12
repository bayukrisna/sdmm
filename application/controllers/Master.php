<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model');
		 if ($this->session->userdata('logged_in') != TRUE) {
		 	redirect(base_url('login'));
		 }
	}
	public function index()
	{
			
	}
	//===================================================================================\\
	//===================================================================================\\
	public function status_pegawai(){
		$data['pegawai'] = $this->Master_model->get_status_pegawai();
		$data['main_view'] = 'Master/status_pegawai_view';
		$this->load->view('template', $data);
	}
	public function add_status_pegawai(){
		if($this->Master_model->add_status_pegawai() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/status_pegawai');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/status_pegawai');
		}
	}
	public function delete_status_pegawai($id){
		if ($this->db->where('id_status_pegawai', $id)->delete('tb_status_pegawai') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Master/status_pegawai');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Master/status_pegawai');
		}
	}
	public function edit_status_pegawai(){
		if($this->Master_model->edit_status_pegawai() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/status_pegawai');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/status_pegawai');
		}
	}
	//===================================================================================\\
	//===================================================================================\\
	public function jenis_pegawai(){
		$data['pegawai'] = $this->Master_model->get_jenis_pegawai();
		$data['main_view'] = 'Master/jenis_pegawai_view';
		$this->load->view('template', $data);
	}
	public function add_jenis_pegawai(){
		if($this->Master_model->add_jenis_pegawai() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/jenis_pegawai');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/jenis_pegawai');
		}
	}
	public function delete_jenis_pegawai($id){
		if ($this->db->where('id_jp', $id)->delete('tb_jenis_pegawai') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Master/jenis_pegawai');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Master/jenis_pegawai');
		}
	}
	public function edit_jenis_pegawai(){
		if($this->Master_model->edit_jenis_pegawai() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/jenis_pegawai');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/jenis_pegawai');
		}
	}
}