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
		$this->db->select('tbl_transaksi., tbl_barang., tbl_pelanggan.*');
		$this->db->join('tbl_barang', 'tbl_barang.ID_BARANG = tbl_transaksi.ID_BARANG');
		$this->db->join('tbl_pelanggan', 'tbl_pelanggan.ID_PELANGGAN = tbl_transaksi.ID_PELANGGAN');
		$this->db->from('tbl_transaksi');
		$this->db->where("tbl_pelanggan.ID_PELANGGAN",$id);
		$data=$this->db->get();
		return $data;
	}
	
} 

?>