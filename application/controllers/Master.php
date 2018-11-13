<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('master_model');
		ini_set('display_errors', 0);
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
		$data['pegawai'] = $this->master_model->get_status_pegawai();
		$data['main_view'] = 'Master/status_pegawai_view';
		$this->load->view('template', $data);
	}
	public function add_status_pegawai(){
		if($this->master_model->add_status_pegawai() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('master/status_pegawai');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('master/status_pegawai');
		}
	}
	public function delete_status_pegawai($id){
		if ($this->db->where('id_status_pegawai', $id)->delete('tb_status_pegawai') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('master/status_pegawai');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('master/status_pegawai');
		}
	}
	public function edit_status_pegawai(){
		if($this->master_model->edit_status_pegawai() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('master/status_pegawai');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('master/status_pegawai');
		}
	}
	//===================================================================================\\
	//===================================================================================\\
	public function jenis_pegawai(){
		$data['pegawai'] = $this->master_model->get_jenis_pegawai();
		$data['main_view'] = 'Master/jenis_pegawai_view';
		$this->load->view('template', $data);
	}
	public function add_jenis_pegawai(){
		if($this->master_model->add_jenis_pegawai() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('master/jenis_pegawai');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('master/jenis_pegawai');
		}
	}
	public function delete_jenis_pegawai($id){
		if ($this->db->where('id_jp', $id)->delete('tb_jenis_pegawai') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('master/jenis_pegawai');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('master/jenis_pegawai');
		}
	}
	public function edit_jenis_pegawai(){
		if($this->master_model->edit_jenis_pegawai() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('master/jenis_pegawai');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('master/jenis_pegawai');
		}
	}

	//===================================================================================\\
	//===================================================================================\\
	public function divisi(){
		$data['divisi'] = $this->master_model->data_divisi();
		$data['main_view'] = 'Master/divisi_pegawai_view';
		$this->load->view('template', $data);
	}
	public function add_divisi(){
		if($this->master_model->add_divisi() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('master/divisi');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('master/divisi');
		}
	}
	public function delete_divisi($id_divisi){
		if ($this->db->where('id_divisi', $id_divisi)->delete('tb_divisi') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('master/divisi');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('master/divisi');
		}
	}
	public function edit_divisi(){
		if($this->master_model->edit_divisi() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('master/divisi');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('master/divisi');
		}
	}
	//===================================================================================\\
	//===================================================================================\\

	public function campus(){
		$data['campus'] = $this->master_model->data_campus();
		$data['main_view'] = 'Master/campus_pegawai_view';
		$this->load->view('template', $data);
	}
	public function add_campus(){
		if($this->master_model->add_campus() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('master/campus');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('master/campus');
		}
	}
	public function delete_campus($id_campus){
		if ($this->db->where('id_campus', $id_campus)->delete('tb_campus') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('master/campus');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('master/campus');
		}
	}
	public function edit_campus(){
		if($this->master_model->edit_campus() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('master/campus');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('master/campus');
		}
	}
}