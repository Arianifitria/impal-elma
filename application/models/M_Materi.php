<?php
class M_Materi extends CI_Model
{

	public function get_data()
	{
		$data = $this->session->userdata('username');
		$this->db->where('username',$data);
		$query = $this->db->get('member');
		return $query->result();
	}

	function updatee($data){  
  		$tabel = 'member'; 
      $lolo = array (
            "username"=>$data['username'],
            "password"=>$data['password'],
            "nama"=>$data['nama'],
            "email"=>$data['email'],
            "alamat"=>$data['alamat'],
            "foto"=>$data['foto']
        );  
        $this->db->where('username', $data['username']);
        $update = $this->db->update($tabel,$lolo); 
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
 	}

 	public function upload($data){
    
      $this->db->set('foto',$data);
      $this->db->where('username',$this->session->userdata('username'));
      $this->db->update('member');
      return true;
  	}
}
 ?>