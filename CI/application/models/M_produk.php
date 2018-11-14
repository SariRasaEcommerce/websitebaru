<?php 

class M_produk extends CI_Model{ 
	public function select($table){
		return $this->db->get($table);
	}
	public function selectlimit($table){
		$this->db->order_by('id_informasi','DESC') ;
		$this->db->limit(3) ;
		return $this->db->get($table) ;
	}
	public function selectwhere($table,$data){
		return $this->db->get_where($table, $data);
	}
	function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function update($table,$data,$where){
		$this->db->update($table,$data,$where);
	}

	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
} 

?>