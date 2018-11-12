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

    public function simpan_edit_pegawai($id_pegawai, $upload){
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
            'email'         => $this->input->post('email')
      );

   $data2 = array('foto_pegawai' => $upload['file_name'] );
    if (!empty($data)) {
            $this->db->where('id_pegawai', $id_pegawai)
        ->update('tb_pegawai', $data);
        if($upload['file_name'] != null){
            $this->db->where('id_pegawai', $id_pegawai)
            ->update('tb_pegawai', $data2);
        }
          return true;
        } else {
            return null;
        }
  }

   public function data_pegawai(){
     return $this->db->join('tb_kelamin','tb_kelamin.id_kelamin=tb_pegawai.id_kelamin')
                    ->join('tb_status_pegawai','tb_status_pegawai.id_status_pegawai=tb_pegawai.id_status_pegawai')
                    ->join('tb_jenis_pegawai','tb_jenis_pegawai.id_jp=tb_pegawai.id_jp')
                    ->order_by('tb_pegawai.nama_pegawai', 'ASC')
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

   public function getStatusPegawai(){
     return $this->db->get('tb_status_pegawai')
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

    public function data_pendidikan($id_pegawai){
     return $this->db->where('id_pegawai', $id_pegawai)
                    ->get('tb_pendidikan')
                    ->result();
   }

   public function simpan_pendidikan($id_pegawai)
    {
        $data = array(
            'id_pegawai'            => $id_pegawai,
            'bidang_studi'         => $this->input->post('bidang_studi'),
            'jenjang'            => $this->input->post('jenjang'),
            'gelar'            => $this->input->post('gelar'),
            'asal_sekolah_pt'            => $this->input->post('asal_sekolah_pt'),
            'fakultas'            => $this->input->post('fakultas'),
            'tahun_lulus'            => $this->input->post('tahun_lulus')
        );
    
        $this->db->insert('tb_pendidikan', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_pendidikan($id_pendidikan){
        $this->db->where('id_pendidikan', $id_pendidikan)
          ->delete('tb_pendidikan');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

     public function data_pelatihan($id_pegawai){
     return $this->db->where('id_pegawai', $id_pegawai)
                    ->get('tb_pelatihan')
                    ->result();
   }

    public function simpan_pelatihan($id_pegawai)
    {
        $data = array(
            'id_pegawai'            => $id_pegawai,
            'nama_pelatihan'         => $this->input->post('nama_pelatihan'),
            'jenis_pelatihan'            => $this->input->post('jenis_pelatihan'),
            'lokasi_pelatihan'            => $this->input->post('lokasi_pelatihan'),
            'tgl_awal_pelatihan'            => $this->input->post('tgl_awal_pelatihan'),
            'tgl_akhir_pelatihan'            => $this->input->post('tgl_akhir_pelatihan')
        );
    
        $this->db->insert('tb_pelatihan', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_pelatihan($id_pelatihan){
        $this->db->where('id_pelatihan', $id_pelatihan)
          ->delete('tb_pelatihan');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

    public function data_seminar($id_pegawai){
     return $this->db->where('id_pegawai', $id_pegawai)
                    ->get('tb_seminar')
                    ->result();
   }

    public function simpan_seminar($id_pegawai)
    {
        $data = array(
            'id_pegawai'            => $id_pegawai,
            'nama_seminar'         => $this->input->post('nama_seminar'),
            'keterangan_seminar'            => $this->input->post('keterangan_seminar'),
            'lokasi_seminar'            => $this->input->post('lokasi_seminar'),
            'tgl_seminar'            => $this->input->post('tgl_seminar')
        );
    
        $this->db->insert('tb_seminar', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_seminar($id_seminar){
        $this->db->where('id_seminar', $id_seminar)
          ->delete('tb_seminar');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

    public function data_penghargaan($id_pegawai){
     return $this->db->where('id_pegawai', $id_pegawai)
                    ->get('tb_penghargaan')
                    ->result();
   }

    public function simpan_penghargaan($id_pegawai)
    {
        $data = array(
            'id_pegawai'            => $id_pegawai,
            'nama_penghargaan'         => $this->input->post('nama_penghargaan'),
            'keterangan_penghargaan'            => $this->input->post('keterangan_penghargaan'),
            'no_sk_penghargaan'            => $this->input->post('no_sk_penghargaan'),
            'tgl_sk_penghargaan'            => $this->input->post('tgl_sk_penghargaan')
        );
    
        $this->db->insert('tb_penghargaan', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_penghargaan($id_penghargaan){
        $this->db->where('id_penghargaan', $id_penghargaan)
          ->delete('tb_penghargaan');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

    public function data_hukuman($id_pegawai){
     return $this->db->where('id_pegawai', $id_pegawai)
                    ->get('tb_hukuman')
                    ->result();
   }

    public function simpan_hukuman($id_pegawai)
    {
        $data = array(
            'id_pegawai'            => $id_pegawai,
            'nama_hukuman'         => $this->input->post('nama_hukuman'),
            'uraian'            => $this->input->post('uraian'),
            'nomor_sk'            => $this->input->post('nomor_sk'),
            'tanggal_sk'            => $this->input->post('tanggal_sk'),
            'tanggal_mulai'            => $this->input->post('tanggal_mulai'),
            'tanggal_selesai'            => $this->input->post('tanggal_selesai'),
        );
    
        $this->db->insert('tb_hukuman', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_hukuman($id_hukuman){
        $this->db->where('id_hukuman', $id_hukuman)
          ->delete('tb_hukuman');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

    public function data_cuti($id_pegawai){
     return $this->db->where('id_pegawai', $id_pegawai)
                    ->get('tb_cuti')
                    ->result();
   }

    public function simpan_cuti($id_pegawai)
    {
        $data = array(
            'id_pegawai'            => $id_pegawai,
            'alasan_cuti'         => $this->input->post('alasan_cuti'),
            'tgl_mulai_cuti'            => $this->input->post('tgl_mulai_cuti'),
            'tgl_selesai_cuti'            => $this->input->post('tgl_selesai_cuti')
        );
    
        $this->db->insert('tb_cuti', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_cuti($id_cuti){
        $this->db->where('id_cuti', $id_cuti)
          ->delete('tb_cuti');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */