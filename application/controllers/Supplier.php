<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Supplier_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect('login');
		}
	}

	public function index()
	{
			$data['supplier'] = $this->Supplier_model->data_supplier();
			$data['main_view'] = 'Supplier/supplier_view';
			$this->load->view('template', $data);
	}

	public function tambah_supplier()
	{
			$data['main_view'] = 'Supplier/tambah_supplier_view';
			$this->load->view('template', $data);
	}

	public function simpan_supplier()
	{
			if($this->Supplier_model->simpan_supplier() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data supplier berhasil disimpan </div>');
            	redirect('supplier');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('supplier');
		}
	}

	public function page_edit_supplier()
	{
			$id_supplier = $this->uri->segment(3);
			$data['supplier'] = $this->Supplier_model->detail_supplier($id_supplier);
			$data['main_view'] = 'Supplier/edit_supplier_view';
			$this->load->view('template', $data);
	}

	public function detail_supplier()
	{
			$id_supplier = $this->uri->segment(3);
			$data['supplier'] = $this->Supplier_model->detail_supplier($id_supplier);
			$data['main_view'] = 'Supplier/detail_supplier_view';
			$this->load->view('template', $data);
	}

	public function edit_supplier(){
			$id_supplier = $this->uri->segment(3);
			$nama_supplier = $this->input->post('nama_supplier');
					if ($this->Supplier_model->edit_supplier($id_supplier) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$nama_supplier.' berhasil </div>');
            			redirect('supplier');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$nama_supplier.' gagal </div>');
            			redirect('supplier');
					}
		} 

	public function hapus_supplier(){
		$id_supplier = $this->uri->segment(3);
		if ($this->db->where('id_supplier', $id_supplier)->delete('tb_supplier') == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Hapus Supplier Berhasil </div>');
			redirect('supplier');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Hapus Supplier Gagal </div>');
			redirect('supplier');
		}
	}


}