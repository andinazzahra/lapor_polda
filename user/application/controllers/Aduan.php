<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduan extends CI_Controller {

	
	public function index()
	{
		$this->load->view('buat_aduan');
	}
}
