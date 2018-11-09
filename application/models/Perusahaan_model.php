<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_perusahaan()
    {
        $data = array(
            'nama_perusahaan'                        => $this->input->post('nama_perusahaan')
        );
    
        $this->db->insert('tb_perusahaan', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

   public function data_perusahaan(){
     return $this->db->get('tb_perusahaan')->result();
   }

  public function edit_perusahaan($id_perusahaan){
    $data = array(
            'nama_perusahaan'                        => $this->input->post('nama_perusahaan')
      );

    if (!empty($data)) {
            $this->db->where('id_perusahaan', $id_perusahaan)
        ->update('tb_perusahaan', $data);

          return true;
        } else {
            return null;
        }
  }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */