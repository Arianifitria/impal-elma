<?php
class M_Materi extends CI_Model
{
  public $table = 'jawaban';

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
    
      $this->db->set('file',$data);
      $this->db->where('username',$this->session->userdata('username'));
      $this->db->update('member');
      return true;
    }
  public function save($data){
  $upload = array(
    'file' => $data['file']['file_name']);
  $this->db->insert('jawaban',$upload);
  }



  function input_data($data,$table){
        $this->db->insert($table,$data);
    }

        function create_data($data)
    {
        $this->db->insert($this->table, $data);
        if($this->db->affected_rows() > 0){
            return true;
        } else{
            return false;
        }
    }
        function valid_id($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id));
        if ($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}
 ?>