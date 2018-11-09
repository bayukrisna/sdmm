<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_model($upload)
    {
        $data = array(
            'nama_model'                        => $this->input->post('nama_model'),
            'id_merk'                 => $this->input->post('id_merk'),
            'id_kategori'                 => $this->input->post('id_kategori'),
            'model_no'            => $this->input->post('model_no'),
            'eol'         => $this->input->post('eol'),
            'notes'         => $this->input->post('notes'),
            'image'         => $upload['file_name']
        );
    
        $this->db->insert('tb_model', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  
    function drop_merk()
    {
        return $this->db->get('tb_merk')
                    ->result();

    }
    function drop_lahan()
    {
        return $this->db->get('tb_lahan')
                    ->result();

    }

    function drop_kategori()
    {
        return $this->db->get('tb_kategori')
                    ->result();

    }

   public function data_model(){
     return $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_model.id_kategori', 'left')
                    ->join('tb_merk', 'tb_merk.id_merk = tb_model.id_merk', 'left')
                    ->get('tb_model')->result();
   }

  public function edit_model($id_model, $upload){

    $data = array(
            'nama_model'                        => $this->input->post('nama_model'),
            'id_kategori'                 => $this->input->post('id_kategori'),
            'id_merk'                 => $this->input->post('id_merk'),
            'model_no'            => $this->input->post('model_no'),
            'eol'         => $this->input->post('eol'),
            'notes'         => $this->input->post('notes')
        );
    $data2 = array('image' => $upload['file_name'] );
    if (!empty($data)) {
            $this->db->where('id_model', $id_model)
        ->update('tb_model', $data);
        if($upload['file_name'] != null){
            $this->db->where('id_model', $id_model)
            ->update('tb_model', $data2);
        }
          return true;
        } else {
            return null;
        }
  }

  public function data_barang($id_model){
     return $this->db->join('tb_ruang','tb_ruang.id_ruang=tb_barang.id_ruang')
                    ->join('tb_gedung','tb_gedung.id_gedung=tb_ruang.id_gedung')
                    ->join('tb_lahan','tb_lahan.id_lahan=tb_gedung.id_lahan')
                    ->join('tb_perusahaan','tb_perusahaan.id_perusahaan=tb_lahan.id_perusahaan') 
                    ->join('tb_status','tb_status.id_status=tb_ruang.id_status')
                    ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                    ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                    ->join('tb_kategori','tb_kategori.id_kategori=tb_model.id_kategori')
                    ->where('tb_model.id_model', $id_model)
                    ->get('tb_barang')
                    ->result();
   }
 public function detail_model($id_model){
     return $this->db->where('tb_model.id_model', $id_model)
                    ->get('tb_model')
                    ->row();
   }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */