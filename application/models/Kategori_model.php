<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_kategori()
    {
        $data = array(
            'kategori'                        => $this->input->post('kategori'),
        );
    
        $this->db->insert('tb_kategori', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  

   public function data_ruang(){
     return $this->db->get('tb_kategori')
                    ->result();
   }

  public function edit_kategori($id_kategori){
    $data = array(
            'id_kategori' => $this->input->post('id_kategori'),
            'kategori' => $this->input->post('kategori')
      );

    if (!empty($data)) {
            $this->db->where('id_kategori', $id_kategori)
        ->update('tb_kategori', $data);

          return true;
        } else {
            return null;
        }
  }

   public function hapus_kategori($id_kategori){
        $this->db->where('id_kategori', $id_kategori)
          ->delete('tb_kategori');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */