<?php
class Buat_aduan extends CI_Controller {
	function index() {

        $inputan = $this->input->post();
        if($inputan)
        {
            echo "<pre>";
            print_r($inputan);
            echo "</pre>";
            //disini tinggal panggil model
            //lalu jalankan function simpan_aduan($inputan) melalui model agar masuk ke database
        }
		
		$this->load->view("header");
		$this->load->view("buat_aduan");
		$this->load->view("footer");
	}
}