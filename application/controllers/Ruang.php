<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ruang_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect('login');
		}
	}

	public function index()
	{
			$data['getGedung'] = $this->Ruang_model->getGedung();
			$data['getStatus'] = $this->Ruang_model->getstatus();
			$data['ruang'] = $this->Ruang_model->data_ruang();
			$data['main_view'] = 'Ruang/ruang_view';
			$this->load->view('template', $data);
	}

	public function simpan_ruang()
	{
			if($this->Ruang_model->simpan_ruang() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data ruang berhasil disimpan </div>');
            	redirect('ruang');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('ruang');
		}
	}

	function getGedung()
    {
        return $this->db->get('tb_gedung')
                    ->result();

    }

    function getstatus()
    {
        return $this->db->get('tb_status')
                    ->result();

    }
	public function edit_ruang(){
			$id_periode = $this->input->post('id_ruang');
					if ($this->Ruang_model->edit_ruang($id_periode) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$id_periode.' berhasil . </div>');
            			redirect('ruang');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$id_periode.' gagal . </div>');
            			redirect('ruang');
					}
		} 
	public function delete($id_ruang){
		if ($this->db->where('id_ruang', $id_ruang)->delete('tb_ruang') == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Hapus  berhasil . </div>');
			redirect('ruang');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Hapus  gagal . </div>');
			redirect('ruang');
		}
	}
}