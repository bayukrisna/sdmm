<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}
    public function create_user($username) {
        $query = $this->db->select('*')
                ->from('tb_user')
                ->where('username', $username)
                ->get();
         $s = $this->db->select('MAX(id_user) as id_user')->from('tb_user')->get()->row();
        $kk = $s->id_user + 1;
        if ($query->num_rows() != 1)

            {
                $data = array(
                    'username' => $username,
                    'id_user' => $kk,
                );
            
                $this->db->insert('tb_user', $data);
                return true;
            } else {
                 return false;
            }
    }

      public function create_akses($id_user) {
        $query = $this->db->select('*')
                ->from('tb_akses')
                ->where('id_user', $id_user)
                ->get();
        $s = $this->db->select('MAX(id_user) as id_user')->from('tb_user')->get()->row();
        $kk = $s->id_user;
        if ($query->num_rows() != 1)
            {
                $data = array(
                    'v_bar' => '1',
                    'c_bar' => '1',
                    'd_bar' => '1',
                    'u_bar' => '1',
                    'id_user' => $kk,
                );
            
                $this->db->insert('tb_akses', $data);
                return true;
            }
    }

    public function signup()
    {
        $data = array(
            'username'         => $this->input->post('username'),
        );
    
        $this->db->insert('tb_user', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
    }

     public function data_user(){
     return $this->db->get('tb_user')
                    ->result();
   }

   public function detail_user($id_user){
     return $this->db->where('id_user', $id_user)
                    ->get('tb_user')
                    ->row();
   }

    public function data_user_login(){
     return $this->db->join('tb_user', 'tb_user.id_user=tb_akses.id_user')
                    ->get('tb_akses')
                    ->result();
   }

   public function update_akses($id_user){
    $data = array(
            'u_bar'  => $this->input->post('u_bar'),
            'd_bar'  => $this->input->post('d_bar'),
            'c_bar'  => $this->input->post('c_bar'),
            'v_bar'  => $this->input->post('v_bar'),
      );

    if (!empty($data)) {
            $this->db->where('id_user', $id_user)
        ->update('tb_akses', $data);

          return true;
        } else {
            return null;
        }
  }

  public function data_log(){
     return $this->db->select('user1.username as username, user2.username as to, tb_log.waktu_log, tb_log.aktivitas, tb_log.waktu_log, tb_barang.nama_barang')
                    ->from('tb_log')
                    ->join('tb_user as user1','user1.id_user=tb_log.user_log')
                    ->join('tb_barang','tb_barang.id_barang=tb_log.id_barang')
                    ->join('tb_user as user2','user2.id_user=tb_barang.id_user')   
                    ->order_by('tb_log.waktu_log', 'desc')
                    ->get('')                    
                    ->result();
   }

   public function user_log($id_user){
     return $this->db->select('user1.username as username, user2.username as to, tb_log.waktu_log, tb_log.aktivitas, tb_log.waktu_log, tb_barang.nama_barang')
                    ->from('tb_log')
                    ->join('tb_user as user1','user1.id_user=tb_log.user_log')
                    ->join('tb_barang','tb_barang.id_barang=tb_log.id_barang')
                    ->join('tb_user as user2','user2.id_user=tb_barang.id_user') 
                    ->where('tb_log.user_log', $id_user)  
                    ->order_by('tb_log.waktu_log', 'desc')
                    ->get('')                    
                    ->result();
   }


}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */