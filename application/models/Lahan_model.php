<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_lahan()
    {
        $data = array(
            'nama_lahan'                        => $this->input->post('nama_lahan'),
            'tgl_perolehan'                        => $this->input->post('tgl_perolehan'),
            'luas_lahan'                 => $this->input->post('luas_lahan'),
            'harga_perolehan'      	  => $this->input->post('harga_perolehan'),
            'id_perusahaan'      		=> $this->input->post('id_perusahaan'),
            'alamat'         => $this->input->post('alamat'),
        );
    
        $this->db->insert('tb_lahan', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  

   public function data_lahan(){
     return $this->db->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan=tb_lahan.id_perusahaan')
                    ->get('tb_lahan')->result();
   }

  public function edit_lahan($id_periode){
    $data = array(
            'nama_lahan'                        => $this->input->post('nama_lahan'),
            'tgl_perolehan'                        => $this->input->post('tgl_perolehan'),
            'luas_lahan'                 => $this->input->post('luas_lahan'),
            'harga_perolehan'          => $this->input->post('harga_perolehan'),
            'id_perusahaan'         => $this->input->post('id_perusahaan'),
            'alamat'         => $this->input->post('alamat')
      );

    if (!empty($data)) {
            $this->db->where('id_lahan', $id_periode)
        ->update('tb_lahan', $data);

          return true;
        } else {
            return null;
        }
  }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */