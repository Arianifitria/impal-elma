<?php 
Class M_admin extends CI_Model{
	
	 public function check_user($data)
    {
            $this->db->where('username', $data['username']);
            $this->db->where('password', $data['password']);
 
            $query = $this->db->get('admin');

            if($query->num_rows()== 1) {
                return $query->row(0);
            } else {
                return FALSE;
            }
    }

    function updatee($data){  
      $tabel = 'member'; 
      $lolo = array (
            "username"=>$data['username'],
            "nilai"=>$data['nilai'],
            "nama"=>$data['nama'],
            "presensi"=>$data['presensi'],
        );  
        $this->db->where('username', $data['username']);
        $update = $this->db->update($tabel,$lolo); 
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	
}

?>