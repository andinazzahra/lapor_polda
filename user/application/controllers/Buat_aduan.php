<?php
class Buat_aduan extends CI_Controller {
	function index() {
		
		$this->load->view("header");
		$this->load->view("buat_aduan");
		$this->load->view("footer");
	}
}