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
	public function aksi_upload()
	{
		if(isset($_POST['btnSubmit'])){
			$config = array('upload_path' => './gambar/transfer/',
				'allowed_types' => 'gif|jpg|png'
			);
			$this -> load -> library ('upload',$config);
			if ($this->upload->do_upload('img'))
			{
				$upload_data = $this -> upload -> data ();
				$foto = "gambar/transfer".$upload_data['file_name'];
				$data = array(
					$where=$this->session->userdata('id_pelanggan'),
					'img' => $foto
				);
				$insert_data = $this->db->insert('tbl_buktitf',$data);
			}
			if ($insert_data) {
				echo "upload berhasil";
			} else{
				echo "string";
			}
		}else{
			echo "string1";
		}

	}
}
	?>