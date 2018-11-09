<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}

     public function dashboard_admin(){
     	$t_perusahaan = $this->db->select('count(*) as total')
	                ->get('tb_kategori')
	                ->row();
	    $t_barang = $this->db->select('count(*) as total')
	                ->get('tb_barang')
	                ->row();
	    $t_merk = $this->db->select('count(*) as total')
	                ->get('tb_merk')
	                ->row();
	    $t_model = $this->db->select('count(*) as total')
	                ->get('tb_model')
	                ->row();

	    return array(
	      't_perusahaan' => $t_perusahaan->total,
	      't_barang' => $t_barang->total,
	      't_merk' => $t_merk->total,
	      't_model' => $t_model->total

	      );
	  }
	public function data_log(){
     return $this->db->select('user1.username as username, user2.username as to, tb_log.waktu_log, tb_log.aktivitas, tb_log.waktu_log, tb_barang.nama_barang')
     				->from('tb_log')
     				->join('tb_user as user1','user1.id_user=tb_log.user_log')
     				->join('tb_barang','tb_barang.id_barang=tb_log.id_barang')
     				->join('tb_user as user2','user2.id_user=tb_barang.id_user')
     				
     				->order_by('tb_log.waktu_log', 'desc')
     				->limit(5)
                    ->get('')                    
                    ->result();
   }
	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */