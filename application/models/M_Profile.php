<?php
class M_Profile extends CI_Model
{

	public function get_data()
	{
		$data = $this->session->userdata('username');
		$this->db->where('username',$data);
		$query = $this->db->get('member');
		return $query->result();
	}

public function get_data1()
  {
    $data = $this->session->userdata('username');
    $this->db->where('username',$data);
    $query = $this->db->get('admin');
    return $query->result();
  }

	function edit_member($where,$table){  
  		return $this->db->get_where($table,$where);
 	}

 	function updatee($data){  
  		$tabel = 'member'; 
      $lolo = array (
            'username'=>$data['username'],
            'password'=>$data['password'],
            'nama'=>$data['nama'],
            'email'=>$data['email'],
            'alamat'=>$data['alamat'],
            'foto'=>$data['foto']
        );  
        $this->db->where('username', $data['username']);
        $update = $this->db->update($tabel,$lolo); 
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
 	}
  function update_data($data,$table){
    $this->db->where('username',$this->session->userdata('username'));
    $this->db->update($table,$data);
    
    return true;
  } 

  function updatee1($data){  
      $tabel = 'admin'; 
      $lolo = array (
            "username"=>$data['username'],
            "password"=>$data['password'],
            "nama"=>$data['nama'],
            "nip"=>$data['nip'],
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

public function upload1($data){
    
      $this->db->set('foto',$data);
      $this->db->where('username',$this->session->userdata('username'));
      $this->db->update('admin');
      return true;
  }
  public function save($data){
    $upload = array(
      'foto' => $data['file']['file_name']);
    $this->db->insert('member',$upload);
  }

  // 	public function input($data){
  //   	try{
  //     		$this->db->insert('produk', $data);
  //     		return true;
  //   }catch(Exception $e){
  //   }
  // }
}
?>