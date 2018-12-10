<?php

class Transaksi extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');
		$this->load->model('M_login');
		$this -> load ->library('session');
		$this->load->helper(array('form','url'));
	}
	public function index()
	{
		$where=$this->session->userdata('id_pelanggan');
		$data['pemesan']=$this-> M_transaksi -> selectwhere('tbl_pelanggan', $where);
		$data['transaksi']=$this-> M_transaksi -> transaksi();
		$this -> load -> view('Transaksi/V_transaksi', $data);
	}

}

?>