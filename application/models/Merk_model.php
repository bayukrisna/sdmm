<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_merk()
    {
        $data = array(
            'merk'                        => $this->input->post('merk'),
        );
    
        $this->db->insert('tb_merk', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function data_barang($id_merk){
     return $this->db->join('tb_ruang','tb_ruang.id_ruang=tb_barang.id_ruang')
                    ->join('tb_gedung','tb_gedung.id_gedung=tb_ruang.id_gedung')
                    ->join('tb_lahan','tb_lahan.id_lahan=tb_gedung.id_lahan')
                    ->join('tb_perusahaan','tb_perusahaan.id_perusahaan=tb_lahan.id_perusahaan') 
                    ->join('tb_status','tb_status.id_status=tb_ruang.id_status')
                    ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                    ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                    ->join('tb_kategori','tb_kategori.id_kategori=tb_model.id_kategori')
                    ->where('tb_merk.id_merk', $id_merk)
                    ->get('tb_barang')
                    ->result();
   }
  

   public function data_merk(){
     return $this->db->get('tb_merk')
                    ->result();
   }

   public function detail_merk($id_merk){
     return $this->db->where('tb_merk.id_merk', $id_merk)
                    ->get('tb_merk')
                    ->row();
   }


  public function edit_merk($id_merk){
    $data = array(
            'id_merk' => $this->input->post('id_merk'),
            'merk' => $this->input->post('merk')
      );

    if (!empty($data)) {
            $this->db->where('id_merk', $id_merk)
        ->update('tb_merk', $data);

          return true;
        } else {
            return null;
        }
  }

   public function hapus_merk($id_merk){
        $this->db->where('id_merk', $id_merk)
          ->delete('tb_merk');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */