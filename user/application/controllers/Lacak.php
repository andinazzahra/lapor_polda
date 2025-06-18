<?php
class Lacak extends CI_Controller {
	function index() {
		
		if (isset($_GET['kode'])) {

			$this->load->view("header");
			$this->load->view("lacak");
			$this->load->view("footer");
		} else {
			redirect("/");
		}
	}
}