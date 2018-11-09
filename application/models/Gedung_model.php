<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_gedung()
    {
        $data = array(
            'nama_gedung'                        => $this->input->post('nama_gedung'),
            'luas_gedung'                 => $this->input->post('luas_gedung'),
            'kegiatan'            => $this->input->post('kegiatan'),
            'id_status'         => $this->input->post('id_status'),
            'id_lahan'         => $this->input->post('id_lahan')
        );
    
        $this->db->insert('tb_gedung', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  
    function drop_status()
    {
        return $this->db->get('tb_status')
                    ->result();

    }
    function drop_lahan()
    {
        return $this->db->get('tb_lahan')
                    ->result();

    }

   public function data_gedung(){
     return $this->db->join('tb_lahan', 'tb_lahan.id_lahan = tb_gedung.id_lahan')
                    ->join('tb_status', 'tb_status.id_status = tb_gedung.id_status')
                    ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan=tb_lahan.id_perusahaan')
                    ->get('tb_gedung')->result();
   }

  public function edit_gedung($id_gedung){
    $data = array(
            'id_gedung'                        => $this->input->post('id_gedung'),
            'nama_gedung'                        => $this->input->post('nama_gedung'),
            'luas_gedung'                 => $this->input->post('luas_gedung'),
            'kegiatan'            => $this->input->post('kegiatan'),
            'id_status'         => $this->input->post('id_status'),
            'id_lahan'         => $this->input->post('id_lahan')
      );

    if (!empty($data)) {
            $this->db->where('id_gedung', $id_gedung)
        ->update('tb_gedung', $data);

          return true;
        } else {
            return null;
        }
  }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */