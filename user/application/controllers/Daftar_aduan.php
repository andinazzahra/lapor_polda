<?php
class Daftar_aduan extends CI_Controller {
	function index() {
		
		$this->load->view("header");
		$this->load->view("daftar_aduan");
		$this->load->view("footer");
	}
}