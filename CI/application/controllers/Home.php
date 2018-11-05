<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function Homepage()
	{
		$this->load->view('Homepage/Javascript_footer');
		$this->load->view('Homepage/Top_bar');
		$this->load->view('Homepage/Navbar_mainmenu');
		$this->load->view('Homepage/Homepage_slider');
		$this->load->view('Homepage/Main_content');
		$this->load->view('Homepage/Footer');
		$this->load->view('Homepage/Copyright');
	}
}
?>