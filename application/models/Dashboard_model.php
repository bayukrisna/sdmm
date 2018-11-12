<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}

     public function dashboard_admin(){
     	$t_pegawai = $this->db->select('count(*) as total')
	                ->get('tb_pegawai')
	                ->row();
	    $t_status_pegawai = $this->status_pegawai_chart();
	    $t_jenis_pegawai = $this->jenis_pegawai_chart();

	    return array(
	      't_pegawai' => $t_pegawai->total,
	      't_status_pegawai' => $t_status_pegawai,
	      't_jenis_pegawai' => $t_jenis_pegawai

	      );
	  }
	  public function status_pegawai_chart(){
	    $a = $this->db->select('tb_status_pegawai.status_pegawai, count(tb_pegawai.id_pegawai) as jumlah')
	                    ->join('tb_status_pegawai', 'tb_status_pegawai.id_status_pegawai = tb_pegawai.id_status_pegawai')
	                    ->group_by('tb_status_pegawai.status_pegawai')
	                    ->get('tb_pegawai')
	                    ->result();
	        
	        foreach ($a as $key) {
	            $b = '#'.dechex(rand(0x777777, 0xFFFFFF));
	            $arrayName[] = array('value' => $key->jumlah,
	                                'color' => $b,
	                                'label' => $key->status_pegawai);
	        }
	        $c = json_encode($arrayName);
	        return $c;
	  }
	  public function jenis_pegawai_chart(){
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
	        return $c;
	  }
	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */