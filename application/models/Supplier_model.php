<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_supplier()
    {
        $data = array(
            'nama_supplier'                        => $this->input->post('nama_supplier'),
            'alamat'                        => $this->input->post('alamat'),
            'kota'                 => $this->input->post('kota'),
            'kodepos'      		=> $this->input->post('kodepos'),
            'nama_kontak'         => $this->input->post('nama_kontak'),
            'no_telp'         => $this->input->post('no_telp'),
            'fax'         => $this->input->post('fax'),
            'email'         => $this->input->post('email'),
            'url'         => $this->input->post('url'),
            'keterangan'         => $this->input->post('keterangan'),

        );
    
        $this->db->insert('tb_supplier', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  

   public function data_supplier(){
     return $this->db->get('tb_supplier')
                    ->result();
   }

    public function detail_supplier($id_supplier){
     return $this->db->where('id_supplier', $id_supplier)
                    ->get('tb_supplier')
                    ->row();
   }

   public function edit_supplier($id_supplier){
    $data = array(
            'nama_supplier'      => $this->input->post('nama_supplier'),
            'alamat'             => $this->input->post('alamat'),
            'kota'               => $this->input->post('kota'),
            'kodepos'           => $this->input->post('kodepos'),
            'nama_kontak'         => $this->input->post('nama_kontak'),
            'no_telp'         => $this->input->post('no_telp'),
            'fax'         => $this->input->post('fax'),
            'email'         => $this->input->post('email'),
            'url'         => $this->input->post('url'),
            'keterangan'         => $this->input->post('keterangan'),
      );

    if (!empty($data)) {
            $this->db->where('id_supplier', $id_supplier)
        ->update('tb_supplier', $data);

          return true;
        } else {
            return null;
        }
  }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */