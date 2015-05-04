<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index($all='')
	{
		$context['page_title'] = "NITW Apps";
		$this->load->view('layouts/header', $context);
		$this->load->view('layouts/nav-bar');
		$this->load->view('layouts/footer');
	}
}
?>