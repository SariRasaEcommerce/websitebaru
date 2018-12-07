<?php

class Produk extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk');
		$this->load->model('M_login');
	}
	public function index()
	{
		$data['produk']=$this->M_produk->select('tbl_barang');
		$this -> load -> view('Produk/V_produk',$data);
	}
	public function detailproduk($id)
	{
		$where  = array('ID_BARANG' => $id, );
		$data['produk']=$this->M_produk->selectwhere('tbl_barang', $where)->row();
		$this -> load -> view('Produk/V_produkdetail', $data);
	} 

}

?>