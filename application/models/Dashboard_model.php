<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}

     public function dashboard_admin(){
     	$t_pegawai_aktif = $this->db->select('count(*) as total')
     				->where('id_status_pegawai', 1)
	                ->get('tb_pegawai')
	                ->row();
	    $t_pegawai_non_aktif = $this->db->select('count(*) as total')
     				->where('id_status_pegawai !=', 1)
	                ->get('tb_pegawai')
	                ->row();
	    $t_divisi = $this->db->select('count(*) as total')
	                ->get('tb_divisi')
	                ->row();
	    $t_campus = $this->db->select('count(*) as total')
	                ->get('tb_campus')
	                ->row();

	    $t_status_pegawai = $this->status_pegawai_chart();
	    $t_jenis_pegawai = $this->jenis_pegawai_chart();
	    $t_divisi_pegawai = $this->divisi_pegawai_chart();
	    $t_campus_pegawai = $this->campus_pegawai_chart();

	    return array(
	      't_pegawai_aktif' => $t_pegawai_aktif->total,
	      't_divisi' => $t_divisi->total,
	      't_campus' => $t_campus->total,
	      't_pegawai_non_aktif' => $t_pegawai_non_aktif->total,
	      't_status_pegawai' => $t_status_pegawai,
	      't_divisi_pegawai' => $t_divisi_pegawai,
	      't_campus_pegawai' => $t_campus_pegawai,
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

	  public function divisi_pegawai_chart(){
	    $a = $this->db->select('tb_divisi.nama_divisi, count(tb_pegawai.id_pegawai) as jumlah')
	                    ->join('tb_divisi', 'tb_divisi.id_divisi = tb_pegawai.id_divisi')
	                    ->group_by('tb_divisi.nama_divisi')
	                    ->get('tb_pegawai')
	                    ->result();
	        
	        foreach ($a as $key) {
	            $b = '#'.dechex(rand(0x777777, 0xFFFFFF));
	            $arrayName[] = array('value' => $key->jumlah,
	                                'color' => $b,
	                                'label' => $key->nama_divisi);
	        }
	        $c = json_encode($arrayName);
	        return $c;
	  }

	  public function campus_pegawai_chart(){
	    $a = $this->db->select('tb_campus.nama_campus, count(tb_pegawai.id_pegawai) as jumlah')
	                    ->join('tb_campus', 'tb_campus.id_campus = tb_pegawai.id_campus')
	                    ->group_by('tb_campus.nama_campus')
	                    ->get('tb_pegawai')
	                    ->result();
	        
	        foreach ($a as $key) {
	            $b = '#'.dechex(rand(0x777777, 0xFFFFFF));
	            $arrayName[] = array('value' => $key->jumlah,
	                                'color' => $b,
	                                'label' => $key->nama_campus);
	        }
	        $c = json_encode($arrayName);
	        return $c;
	  }
	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */