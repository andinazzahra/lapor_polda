<?php
class Homepage extends CI_Controller {
	function index() {
		
		$this->load->view("header");
		$this->load->view("homepage");
		$this->load->view("footer");
	}
}