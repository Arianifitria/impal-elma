<?php 

/* 1301160464 */
	Class M_obat extends CI_Model
	{
		public function getObat($limit,$start){
			$query = $this->db->get('obat',$limit, $start);
			return $query->result_array();
		}
		
		function getmhs(){
			$query = $this->db->get('member');
			return $query->result_array();
		}
		
		public function getInfoObat($id)
		{
			$this->db->where('id_obat',$id);
			$query = $this->db->get('obat');
			return $query->row_array();
		}
		
		
		public function delete($id)
	{
		$this->db->where('id_obat',$id);
		$this->db->delete('obat');
	}
		
	}
?>