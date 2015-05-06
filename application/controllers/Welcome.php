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
	public function login($all='')
	{
		$context['page_title'] = "NITW Apps | Login";
		$this->load->view('layouts/header', $context);
		$this->load->view('layouts/nav-bar');
		$this->load->view('manage/login');
		$this->load->view('layouts/footer');
	}
	public function query() {
		$this->load->model('Model1');
		$result = $this->Model1->getValue();
		$context['page_title'] = "NITW Apps | Login";
		$this->load->view('layouts/header', $context);
		$this->load->view('layouts/nav-bar');
		echo "<table class='table table-bordered'>";
		foreach ($result as $key) {
			echo "<tr><td>".$key["dept_id"]."</td><td>".$key["dept_name"]."</td><td>".$key["sanction_amt"]."</td><td>".$key["sanction_date"]."</td><td>".
			$key["expend_amt"]."</td><td>".$key["expend_date"]."</td><td>".$key["propos_amt"]."</td><td>".$key["propos_date"]."</td></tr><br />";
		}
		echo "</table>";
		$this->load->view('layouts/footer');
	}
}
?>