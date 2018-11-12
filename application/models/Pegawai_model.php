<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	  public function simpan_pegawai($upload)
    {
        $data = array(
            'nip'                        => $this->input->post('nip'),
            'no_kartu_pegawai'                 => $this->input->post('no_kartu_pegawai'),
            'nama_pegawai'                 => $this->input->post('nama_pegawai'),
            'tempat_lahir'            => $this->input->post('tempat_lahir'),
            'tgl_lahir'         => $this->input->post('tgl_lahir'),
            'id_kelamin'         => $this->input->post('id_kelamin'),
            'id_agama'         => $this->input->post('id_agama'),
            'id_status_pegawai'         => $this->input->post('id_status_pegawai'),
            'id_jp'         => $this->input->post('id_jp'),
            'alamat'         => $this->input->post('alamat'),
            'no_npwp'         => $this->input->post('no_npwp'),
            'no_askes_pegawai'         => $this->input->post('no_askes_pegawai'),
            'tgl_masuk'         => $this->input->post('tgl_masuk'),
            'no_telepon'         => $this->input->post('no_telepon'),
            'email'         => $this->input->post('email'),
            'foto_pegawai'         => $upload['file_name']
        );
    
        $this->db->insert('tb_pegawai', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

   public function data_pegawai(){
     return $this->db->join('tb_kelamin','tb_kelamin.id_kelamin=tb_pegawai.id_kelamin')
                    ->join('tb_status_pegawai','tb_status_pegawai.id_status_pegawai=tb_pegawai.id_status_pegawai')
                    ->get('tb_pegawai')
                    ->result();
   }

   public function detail_pegawai($id_pegawai){
     return $this->db->join('tb_kelamin','tb_kelamin.id_kelamin=tb_pegawai.id_kelamin')
                    ->join('tb_status_pegawai','tb_status_pegawai.id_status_pegawai=tb_pegawai.id_status_pegawai') 
                    ->join('tb_jenis_pegawai','tb_jenis_pegawai.id_jp=tb_pegawai.id_jp')
                    ->join('tb_agama','tb_agama.id_agama=tb_pegawai.id_agama','left')        
                    ->where('tb_pegawai.id_pegawai', $id_pegawai)
                    ->get('tb_pegawai')
                    ->row();
   }

    public function getJenisPegawai(){
     return $this->db->get('tb_jenis_pegawai')
                    ->result();
   }

   public function hapus_pegawai($id_pegawai){
        $this->db->where('id_pegawai', $id_pegawai)
          ->delete('tb_pegawai');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

    public function data_keluarga($id_pegawai){
     return $this->db->join('tb_kelamin','tb_kelamin.id_kelamin=tb_keluarga.id_kelamin')
                    ->join('tb_status_keluarga','tb_status_keluarga.id_sk=tb_keluarga.id_sk')
                    ->where('tb_keluarga.id_pegawai', $id_pegawai)
                    ->get('tb_keluarga')
                    ->result();
   }

   public function simpan_keluarga($id_pegawai)
    {
        $data = array(
            'id_pegawai'            => $id_pegawai,
            'nama_ang_keluarga'         => $this->input->post('nama_ang_keluarga'),
            'id_sk'            => $this->input->post('id_sk'),
            'tgl_lahir'            => $this->input->post('tgl_lahir'),
            'pekerjaan'         => $this->input->post('pekerjaan'),
            'id_kelamin'         => $this->input->post('id_kelamin'),
        );
    
        $this->db->insert('tb_keluarga', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_keluarga($id_keluarga){
        $this->db->where('id_keluarga', $id_keluarga)
          ->delete('tb_keluarga');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

    public function data_jabatan($id_pegawai){
     return $this->db->where('id_pegawai', $id_pegawai)
                    ->get('tb_jabatan')
                    ->result();
   }

   public function simpan_jabatan($id_pegawai)
    {
        $data = array(
            'id_pegawai'            => $id_pegawai,
            'nama_jabatan'         => $this->input->post('nama_jabatan'),
            'sk_jabatan'            => $this->input->post('sk_jabatan'),
            'tgl_sk_jabatan'            => $this->input->post('tgl_sk_jabatan')
        );
    
        $this->db->insert('tb_jabatan', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_jabatan($id_jabatan){
        $this->db->where('id_jabatan', $id_jabatan)
          ->delete('tb_jabatan');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */