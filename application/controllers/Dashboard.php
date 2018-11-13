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

	public function index()
	{
		$data['dashboard'] = $this->Dashboard_model->dashboard_admin();
		$data['main_view'] = 'dashboard_view';
		$this->load->view('template', $data);
	}
	
}