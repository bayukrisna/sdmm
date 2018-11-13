<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
		ini_set('display_errors', 0);
		if ($this->session->userdata('logged_in') != TRUE) {
		 	redirect(base_url('login'));
		 }
	}
	public function kk(){
		$this->load->view('pie_chart');
	}
	public function index()
	{
		$data['dashboard'] = $this->Dashboard_model->dashboard_admin();
		$data['main_view'] = 'dashboard_view';
		$this->load->view('template', $data);
	}
	public function pie(){
		$a = $this->db->select('tb_jenis_pegawai.jenis_pegawai, count(tb_pegawai.id_pegawai) as jumlah')
	                    ->join('tb_jenis_pegawai', 'tb_jenis_pegawai.id_jp = tb_pegawai.id_jp')
	                    ->group_by('tb_jenis_pegawai.jenis_pegawai')
	                    ->get('tb_pegawai')
	                    ->result();
	        
	        foreach ($a as $key) {
	            $b = '#'.dechex(rand(0x777777, 0xFFFFFF));
	            $arrayName[] = array('value' => $key->jumlah,
	                                'color' => $b,
	                                'label' => $key->jenis_pegawai);
	        }
	        $c = json_encode($arrayName);
	        echo $c;
	}
}