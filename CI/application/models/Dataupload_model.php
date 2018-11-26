<?php
/**
 * 
 */
class Dataupload_model extends CI_Model
{
	public $id ='ID_BUKTI';
	public $table ='tbl_buktitf';
		function get_dataupload(){
			return $this->db->query('SELECT tbl_buktitf.ID_BUKTI, tbl_buktitf.ID_DETAILTRANSAKSI, tbl_buktitf.STATUS, tbl_detailtransaksi.TOTAL, tbl_buktitf.IMG FROM tbl_buktitf, tbl_detailtransaksi WHERE tbl_buktitf.ID_DETAILTRANSAKSI = tbl_detailtransaksi.ID_DETAILTRANSAKSI')->result();
		}
		function updatetf(){
			$this->db->where($this->id, $id);
			$this->db->update($this->table, $data);
		}
		public function update($table,$data,$where){
    	$this->db->update($table,$data,$where);
  }
}
?>