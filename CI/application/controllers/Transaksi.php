<?php

class Transaksi extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');
		$this->load->model('M_login');
		$this -> load ->library('session');
	}
	public function index()
	{
		$id = $this->session->userdata('id_pelanggan');
		var_dump($id);
		$data['transaksi']=$this->M_transaksi->transaksi($id)->row();
		$this -> load -> view('Transaksi/V_transaksi', $data);
	}
	

}

?>