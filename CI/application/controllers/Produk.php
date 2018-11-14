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
}

?>