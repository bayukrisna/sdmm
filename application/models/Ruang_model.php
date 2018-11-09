<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_ruang()
    {
        $data = array(
            'id_gedung'                        => $this->input->post('id_gedung'),
            'luas_ruang'                        => $this->input->post('luas_ruang'),
            'nama_ruang'                 => $this->input->post('nama_ruang'),
            'kapasitas'      		=> $this->input->post('kapasitas'),
            'id_status'         => $this->input->post('id_status'),
        );
    
        $this->db->insert('tb_ruang', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  

   public function data_ruang(){
     return $this->db->join('tb_gedung','tb_gedung.id_gedung=tb_ruang.id_gedung')
                    ->join('tb_lahan','tb_lahan.id_lahan=tb_gedung.id_lahan')
                    ->join('tb_perusahaan','tb_perusahaan.id_perusahaan=tb_lahan.id_perusahaan')
                    ->join('tb_status','tb_status.id_status=tb_ruang.id_status')
                    ->get('tb_ruang')
                    ->result();
   }

   public function getGedung(){
     return $this->db->get('tb_gedung')->result();
   }

   public function getStatus(){
     return $this->db->get('tb_status')->result();
   }

  public function edit_ruang($id_periode){
    $data = array(
            'nama_ruang'                        => $this->input->post('nama_ruang'),
            'luas_ruang'                        => $this->input->post('luas_ruang'),
            'kapasitas'                 => $this->input->post('kapasitas'),
            'id_gedung'          => $this->input->post('id_gedung'),
            'id_status'         => $this->input->post('id_status')
      );

    if (!empty($data)) {
            $this->db->where('id_ruang', $id_periode)
        ->update('tb_ruang', $data);

          return true;
        } else {
            return null;
        }
    }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */