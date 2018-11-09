<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_barang($upload)
    {
        $data = array(
            'id_ruang'           => $this->input->post('id_ruang'),
            'nama_barang'        => $this->input->post('nama_barang'),
            'id_status'         => $this->input->post('id_status'),
            'id_model'         => $this->input->post('id_model'),
            'harga_barang'         => $this->input->post('harga_barang'),
            'tgl_pembelian'         => $this->input->post('tgl_pembelian'),
            'id_supplier'         => $this->input->post('id_supplier'),
            'requestable'         => $this->input->post('requestable'),
            'id_user'         => $this->input->post('id_user'),
            'ket_bar'         => $this->input->post('keterangan'),
        );
    
        $this->db->insert('tb_barang', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
    }

     public function edit_barang($id_barang){
    $data = array(
             'id_ruang'           => $this->input->post('id_ruang'),
            'nama_barang'        => $this->input->post('nama_barang'),
            'id_status'         => $this->input->post('id_status'),
            'id_model'         => $this->input->post('id_model'),
            'harga_barang'         => $this->input->post('harga_barang'),
            'tgl_pembelian'         => $this->input->post('tgl_pembelian'),
            'id_supplier'         => $this->input->post('id_supplier'),
            'requestable'         => $this->input->post('requestable'),
            'id_user'         => $this->input->post('id_user'),
            'ket_bar'         => $this->input->post('keterangan'),
      );

    if (!empty($data)) {
            $this->db->where('id_barang', $id_barang)
        ->update('tb_barang', $data);

          return true;
        } else {
            return null;
        }
  }

    public function simpan_berkas($upload)
    {
        $data = array(
            'id_barang'                        => $this->input->post('id_barang'),
            'keterangan_berkas'         => $this->input->post('keterangan_berkas'),
            'nama_berkas'         => $upload['file_name']
        );
    
        $this->db->insert('tb_berkas', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
    }

     public function simpan_status()
    {
        $data = array(
            'status'                        => $this->input->post('status')
        );
    
        $this->db->insert('tb_status', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function simpan_log_barang()
    {
        $data = array(
            'user_log'      => $this->session->userdata('id_user'),
            'aktivitas'     => 'created',
            'id_barang'     => $this->input->post('id_barang'),
        );
    
        $this->db->insert('tb_log', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function log_edit_barang($id_barang)
    {
        $data = array(
            'user_log'      => $this->session->userdata('id_user'),
            'aktivitas'     => 'updated',
            'id_barang'     => $id_barang,
        );
    
        $this->db->insert('tb_log', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function log_simpan_pemeliharaan($id_barang)
    {
        $data = array(
            'user_log'      => $this->session->userdata('id_user'),
            'aktivitas'     => 'item maintenance',
            'id_barang'     => $id_barang,
        );
    
        $this->db->insert('tb_log', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function simpan_pemeliharaan()
    {
        $data = array(
            'id_barang'     => $this->input->post('id_barang'),
            'id_tipe_pemeliharaan'     => $this->input->post('id_tipe_pemeliharaan'),
            'id_supplier'     => $this->input->post('id_supplier'),
            'tgl_mulai_perbaikan'     => $this->input->post('tgl_mulai_perbaikan'),
            'tgl_selesai_perbaikan'     => $this->input->post('tgl_selesai_perbaikan'),
            'harga_perbaikan'     => $this->input->post('harga_perbaikan'),
            'permasalahan'     => $this->input->post('permasalahan'),
        );
    
        $this->db->insert('tb_pemeliharaan', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function getLogBarang()   {
          $this->db->select("MAX(id_barang)+1 AS id");
          $this->db->from("tb_barang");
          $query = $this->db->get();
          return $query->row()->id;
        }
  

   public function data_barang($id_kategori){
     return $this->db->join('tb_ruang','tb_ruang.id_ruang=tb_barang.id_ruang')
                    ->join('tb_gedung','tb_gedung.id_gedung=tb_ruang.id_gedung')
                    ->join('tb_lahan','tb_lahan.id_lahan=tb_gedung.id_lahan')
                    ->join('tb_perusahaan','tb_perusahaan.id_perusahaan=tb_lahan.id_perusahaan') 
                    ->join('tb_status','tb_status.id_status=tb_ruang.id_status')
                    ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                    ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                    ->join('tb_kategori','tb_kategori.id_kategori=tb_model.id_kategori')
                    ->where('tb_kategori.id_kategori', $id_kategori)
                    ->get('tb_barang')
                    ->result();
   }

   public function data_barang_semua(){
     return $this->db->join('tb_ruang','tb_ruang.id_ruang=tb_barang.id_ruang')
                    ->join('tb_gedung','tb_gedung.id_gedung=tb_ruang.id_gedung')
                    ->join('tb_lahan','tb_lahan.id_lahan=tb_gedung.id_lahan')
                    ->join('tb_perusahaan','tb_perusahaan.id_perusahaan=tb_lahan.id_perusahaan')
                    ->join('tb_status','tb_status.id_status=tb_ruang.id_status')
                    ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                    ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                    ->join('tb_kategori','tb_kategori.id_kategori=tb_model.id_kategori')    
                    ->order_by('tb_barang.id_barang', 'DESC')   
                    ->get('tb_barang')
                    ->result();
   }

   public function detail_barang($id_barang){
     return $this->db->join('tb_ruang','tb_ruang.id_ruang=tb_barang.id_ruang')
                    ->join('tb_gedung','tb_gedung.id_gedung=tb_ruang.id_gedung')
                    ->join('tb_lahan','tb_lahan.id_lahan=tb_gedung.id_lahan')
                    ->join('tb_perusahaan','tb_perusahaan.id_perusahaan=tb_lahan.id_perusahaan')
                    ->join('tb_status','tb_status.id_status=tb_ruang.id_status')
                    ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                    ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                    ->join('tb_kategori','tb_kategori.id_kategori=tb_model.id_kategori')
                    ->join('tb_supplier','tb_supplier.id_supplier=tb_barang.id_supplier')
                    ->join('tb_user','tb_user.id_user=tb_barang.id_user')          
                    ->where('tb_barang.id_barang', $id_barang)
                    ->get('tb_barang')
                    ->row();
   }

    public function data_pemeliharaan($id_barang){
     return $this->db->join('tb_barang','tb_barang.id_barang=tb_pemeliharaan.id_barang')  
                    ->join('tb_tipe_pemeliharaan','tb_tipe_pemeliharaan.id_tipe_pemeliharaan=tb_pemeliharaan.id_tipe_pemeliharaan') 
                    ->join('tb_supplier','tb_supplier.id_supplier=tb_pemeliharaan.id_supplier')     
                    ->where('tb_pemeliharaan.id_barang', $id_barang)
                    ->get('tb_pemeliharaan')
                    ->result();
   }

   public function data_riwayat($id_barang){
     return $this->db->join('tb_barang','tb_barang.id_barang=tb_log.id_barang')
                    ->join('tb_user','tb_user.id_user=tb_log.user_log')     
                    ->where('tb_log.id_barang', $id_barang)
                    ->order_by('tb_log.waktu_log', 'desc')
                    ->get('tb_log')
                    ->result();
   }

   public function data_berkas($id_barang){
     return $this->db->join('tb_barang','tb_barang.id_barang=tb_berkas.id_barang')  
                    ->where('tb_berkas.id_barang', $id_barang)
                    ->get('tb_berkas')
                    ->result();
   }

   public function detail_kategori($id_kategori){
     return $this->db->where('tb_kategori.id_kategori', $id_kategori)
                    ->get('tb_kategori')
                    ->row();
   }

    public function data_kategori_barang(){
     return $this->db->get('tb_kategori')
                    ->result();
   }

    public function data_status(){
     return $this->db->get('tb_status')
                    ->result();
   }

   public function get_model_by_mk($id_merk, $id_kategori){
     return $this->db->where('tb_model.id_merk', $id_merk)
                    ->where('tb_model.id_kategori', $id_kategori)
                    ->get('tb_model')->result();
   }

   public function getMerk(){
     return $this->db->get('tb_merk')->result();
   }

   public function get_ruang_by_perusahaan($id_perusahaan){
     return $this->db->join('tb_gedung','tb_gedung.id_gedung=tb_ruang.id_gedung')
                    ->join('tb_lahan','tb_lahan.id_lahan=tb_gedung.id_lahan')
                    ->join('tb_perusahaan','tb_perusahaan.id_perusahaan=tb_lahan.id_perusahaan')
                    ->where('tb_perusahaan.id_perusahaan', $id_perusahaan)
                    ->get('tb_ruang')
                    ->result();
   }

   public function getPerusahaan(){
     return $this->db->get('tb_perusahaan')->result();
   }

   public function getSupplier(){
     return $this->db->get('tb_supplier')->result();
   }

   public function getRuang(){
     return $this->db->get('tb_ruang')->result();
   }

   public function getStatus(){
     return $this->db->get('tb_status')->result();
   }

   public function getTipe(){
     return $this->db->get('tb_tipe_pemeliharaan')->result();
   }

   public function getKategori(){
     return $this->db->get('tb_kategori')->result();
   }

   public function getPengguna(){
     return $this->db->get('tb_user')->result();
   }


  public function edit_status($id_status){
    $data = array(
            'id_status' => $this->input->post('id_status'),
            'status' => $this->input->post('status')
      );

    if (!empty($data)) {
            $this->db->where('id_status', $id_status)
        ->update('tb_status', $data);

          return true;
        } else {
            return null;
        }
  }

   public function hapus_status($id_status){
        $this->db->where('id_status', $id_status)
          ->delete('tb_status');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

    public function hapus_barang($id_barang){
        $this->db->where('id_barang', $id_barang)
          ->delete('tb_barang');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */