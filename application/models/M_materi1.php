<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class M_materi1 extends CI_Model
{    
	public $table = 'member';
    public $order = 'DESC';
	public function get_data()
	{
		$this->db->select('*');
        $this->db->from('member');

        $query = $this->db->get();
        return $query;
	}
	
}

?>