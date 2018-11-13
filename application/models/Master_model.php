<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {

      

  	public function __construct()
  	{
  		parent::__construct();
  	}
  
    public function get_status_pegawai(){
      return $this->db->get('tb_status_pegawai')->result();
    }
    public function get_jenis_pegawai(){
      return $this->db->get('tb_jenis_pegawai')->result();
    }
     public function data_divisi(){
      return $this->db->get('tb_divisi')->result();
    }

    public function data_campus(){
      return $this->db->get('tb_campus')->result();
    }
    //===================================================================================\\
    //===================================================================================\\
    public function add_status_pegawai()
    {
        $data = array(
            'status_pegawai'                        => $this->input->post('status_pegawai')
        );
    
        $this->db->insert('tb_status_pegawai', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_status_pegawai(){
        $data = array('status_pegawai' => $this->input->post('status_pegawai'));

        if (!empty($data)) {
                $this->db->where('id_status_pegawai', $this->input->post('id_status_pegawai'))
            ->update('tb_status_pegawai', $data);

              return true;
            } else {
                return null;
            }
    }
    //===================================================================================\\
    //===================================================================================\\
    public function add_jenis_pegawai()
    {
        $data = array(
            'jenis_pegawai'                        => $this->input->post('jenis_pegawai')
        );
    
        $this->db->insert('tb_jenis_pegawai', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_jenis_pegawai(){
        $data = array('jenis_pegawai' => $this->input->post('jenis_pegawai'));

        if (!empty($data)) {
                $this->db->where('id_jp', $this->input->post('id_jp'))
            ->update('tb_jenis_pegawai', $data);

              return true;
            } else {
                return null;
            }
    }

    //===================================================================================\\
    //===================================================================================\\
    public function add_divisi()
    {
        $data = array(
            'nama_divisi'                        => $this->input->post('nama_divisi')
        );
    
        $this->db->insert('tb_divisi', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_divisi(){
        $data = array('nama_divisi' => $this->input->post('nama_divisi'));

        if (!empty($data)) {
                $this->db->where('id_divisi', $this->input->post('id_divisi'))
            ->update('tb_divisi', $data);

              return true;
            } else {
                return null;
            }
    }

    //===================================================================================\\
    //===================================================================================\\
    public function add_campus()
    {
        $data = array(
            'nama_campus'                        => $this->input->post('nama_campus')
        );
    
        $this->db->insert('tb_campus', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_campus(){
        $data = array('nama_campus' => $this->input->post('nama_campus'));

        if (!empty($data)) {
                $this->db->where('id_campus', $this->input->post('id_campus'))
            ->update('tb_campus', $data);

              return true;
            } else {
                return null;
            }
    }

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */