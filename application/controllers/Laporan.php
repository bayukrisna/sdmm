<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Laporan_model');
		$this->load->model('Barang_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect('login');
		}
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		$data['main_view'] = 'Laporan/laporan_tamu_view';
		$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function laporan_barang(){
		
		$data['main_view'] = 'Laporan/laporan_barang_view';
		$data['getKategori'] = $this->Barang_model->getKategori();
		$this->load->view('template', $data);	
		
	}
	public function laporan_barangku(){
		
    $tgl_pembelian1 = $this->input->get('tgl_pembelian1');
    $tgl_pembelian2 = $this->input->get('tgl_pembelian2');
    $id_kategori = $this->input->get('id_kategori');
    $this->Laporan_model->laporan_barang($tgl_pembelian1, $tgl_pembelian2, $id_kategori);
    
  	}

  	public function laporan_pemeliharaan(){
		
		$data['main_view'] = 'Laporan/laporan_pemeliharaan_view';
		$data['getKategori'] = $this->Barang_model->getKategori();
		$data['getTipe'] = $this->Barang_model->getTipe();
		$this->load->view('template', $data);	
		
	}
	public function laporan_pemeliharaanku(){
		
    $tgl_perbaikan1 = $this->input->get('tgl_perbaikan1');
    $tgl_perbaikan2 = $this->input->get('tgl_perbaikan2');
    $id_kategori = $this->input->get('id_kategori');
    $id_tipe_pemeliharaan = $this->input->get('id_tipe_pemeliharaan');
    $this->Laporan_model->laporan_pemeliharaan($tgl_perbaikan1, $tgl_perbaikan2, $id_kategori, $id_tipe_pemeliharaan);
    
  	}
  	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  	/*public function laporan_mahasiswa(){
  		if ($this->session->userdata('logged_in') == TRUE) {
		$data['main_view'] = 'Laporan/laporan_mahasiswa_view';
		$data['getPeriode'] = $this->laporan_model->getPeriode();
		$data['getProdi'] = $this->laporan_model->getProdi();
		$this->load->view('template', $data);
		} else {
			redirect('login');
		}	
	}
	public function laporan_mahasiswaku(){
		if ($this->session->userdata('logged_in') == TRUE) {
    $id_periode = $this->input->get('id_periode');
    $id_prodi = $this->input->get('id_prodi');
    $this->laporan_model->laporan_mahasiswa($id_periode, $id_prodi);
    } else {
			redirect('login');
		}	
  	}
  	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  	public function laporan_peserta_tes(){
  		if ($this->session->userdata('logged_in') == TRUE) {
  		$data['getTahun'] = $this->laporan_model->getTahun();
		$data['main_view'] = 'Laporan/laporan_peserta_tes_view';
		$this->load->view('template', $data);	
		} else {
			redirect('login');
		}	
	}
	public function laporan_peserta_tesku(){
		if ($this->session->userdata('logged_in') == TRUE) {
    $tanggal_hasil_tes = $this->input->get('tanggal_hasil_tes');
    $this->laporan_model->laporan_peserta_tes($tanggal_hasil_tes);
    } else {
			redirect('login');
		}	
  	}
  	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  	public function laporan_data_getstudent(){
  		if ($this->session->userdata('logged_in') == TRUE) {
  		$data['getTahunSgs'] = $this->laporan_model->getTahunSgs();
		$data['main_view'] = 'Laporan/laporan_data_getstudent_view';
		$this->load->view('template', $data);	
		} else {
			redirect('login');
		}	
	}
	public function laporan_data_getstudentku(){
		if ($this->session->userdata('logged_in') == TRUE) {
    $tanggal_konfirmasi = $this->input->get('tanggal_konfirmasi');
    $this->laporan_model->laporan_data_getstudent($tanggal_konfirmasi);
    } else {
			redirect('login');
		}
  	}
  	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  	public function laporan_dmm(){
  		if ($this->session->userdata('logged_in') == TRUE) {
		$data['main_view'] = 'Laporan/laporan_dmm_view';
		$data['getSemester'] = $this->laporan_model->get_semester_dosen();
		$this->load->view('template', $data);	
		} else {
			redirect('login');
		}
	}
	public function laporan_dmm_dosen(){
		if ($this->session->userdata('logged_in') == TRUE) {
	    $semester = $this->input->post('semester');
	    $id_dosen = $this->input->post('id_dosen');
	    $this->laporan_model->laporan_dmm_dosen($semester, $id_dosen);
	    } else {
			redirect('login');
		}
  	}
  	public function laporan_dmm_mahasiswa(){
  		if ($this->session->userdata('logged_in') == TRUE) {
	    $semester = $this->input->post('semester');
	    $id_mahasiswa = $this->input->post('id_mahasiswa');
	    $this->laporan_model->laporan_dmm_mahasiswa($semester, $id_mahasiswa);
	    } else {
			redirect('login');
		}
  	}
  	public function laporan_dmm_matkul(){
  		if ($this->session->userdata('logged_in') == TRUE) {
	    $semester = $this->input->post('semester');
	    $kode_matkul = $this->input->post('kode_matkul');
	    $this->laporan_model->laporan_dmm_matkul($semester, $kode_matkul);
	    } else {
			redirect('login');
		}
  	}
  	public function get_autocomplete_dosen(){
		if(isset($_GET['term'])){
			$result = $this->laporan_model->autocomplete_dosen($_GET['term']);
			if(count($result) > 0){
				foreach ($result as $row) 
					$result_array[] = array(
						'label' => $row->id_dosen.' - '.$row->nama_dosen,
						'id' => $row->id_dosen);
				echo json_encode($result_array);
			
			}
		}
	}
	public function get_autocomplete_mahasiswa(){
		if(isset($_GET['term'])){
			$result = $this->laporan_model->autocomplete_mahasiswa($_GET['term']);
			if(count($result) > 0){
				foreach ($result as $row) 
					$result_array[] = array(
						'label' => $row->nim.' - '.$row->nama_mahasiswa,
						'id' => $row->id_mahasiswa);
				echo json_encode($result_array);
			
			}
		}
	}
	public function get_autocomplete_matkul(){
		if(isset($_GET['term'])){
			$result = $this->laporan_model->autocomplete_matkul($_GET['term']);
			if(count($result) > 0){
				foreach ($result as $row) 
					$result_array[] = array(
						'label' => $row->kode_matkul.' - '.$row->nama_matkul,
						'id' => $row->kode_matkul);
				echo json_encode($result_array);
			
			}
		}
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function laporan_khs(){
		if ($this->session->userdata('logged_in') == TRUE) {
		$data['main_view'] = 'Laporan/laporan_khs_view';
		$data['getPeriode'] = $this->laporan_model->getPeriode();
		$this->load->view('template', $data);	
		} else {
			redirect('login');
		}
	}
	public function laporan_khsku(){
		if ($this->session->userdata('logged_in') == TRUE) {
	    $id_mahasiswa = $this->input->get('id_mahasiswa');
	    $semester = $this->input->get('semester');
	    $this->laporan_model->laporan_khs($id_mahasiswa, $semester);
	    } else {
			redirect('login');
		}
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function laporan_transkrip(){
		if ($this->session->userdata('logged_in') == TRUE) {
		$data['main_view'] = 'Laporan/laporan_transkrip_view';
		$this->load->view('template', $data);	
		} else {
			redirect('login');
		}
	}
	public function laporan_transkripku(){
		if ($this->session->userdata('logged_in') == TRUE) {
	    $id_mahasiswa = $this->input->get('id_mahasiswa');
	    $this->laporan_model->laporan_transkrip($id_mahasiswa);
	 } else {
			redirect('login');
		}
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function laporan_buku_induk(){
		if ($this->session->userdata('logged_in') == TRUE) {
		$data['getProdi'] = $this->laporan_model->getProdi();
		$data['main_view'] = 'Laporan/laporan_buku_induk_view';
		$this->load->view('template', $data);	
		} else {
			redirect('login');
		}
	}

	public function laporan_buku_indukku(){
		if ($this->session->userdata('logged_in') == TRUE) {
    $angkatan = $this->input->get('angkatan');
    $id_prodi = $this->input->get('id_prodi');
    $kelulusan = $this->input->get('kelulusan');
    $this->laporan_model->laporan_buku_induk($angkatan, $id_prodi, $kelulusan);
    } else {
			redirect('login');
		}	
  	} */
}


