<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class m_produk extends CI_Model
{    
	public $table = 'matakuliah';
    public $order = 'DESC';
	public function get_data()
	{
		$this->db->select('*');
        $this->db->from('matakuliah');

        $query = $this->db->get();
        return $query;
	}
	
}

?>