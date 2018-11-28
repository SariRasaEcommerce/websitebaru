<?php 

class M_transaksi extends CI_Model{ 
	public function select($table){
		return $this->db->get($table);
	}
	public function selectlimit($table){
		$this->db->order_by('id_informasi','DESC') ;
		$this->db->limit(3) ;
		return $this->db->get($table) ;
	}
	public function selectwhere($table,$where){
		return $this->db->get_where($table, $where);
	}
	public function upload($table,$data){
		$this->db->insert($table,$data);
	}
	function transaksi($id){
		$this->db->query('SELECT tbl_transaksi.ID_TRANSAKSI, tbl_barang.ID_BARANG, tbl_pelanggan.ID_PELANGGAN FROM tbl_transaksi, tbl_barang, tbl_pelanggan WHERE tbl_transaksi.ID_BARANG=tbl_barang.ID_BARANG AND tbl_transaksi.ID_PELANGGAN=tbl_pelanggan.ID_PELANGGAN');
	}
	
} 

?>