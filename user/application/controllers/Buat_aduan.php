<?php
class Buat_aduan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Aduan_model');
    }

    function index() {
        $inputan = $this->input->post();

        if ($inputan) {
            $this->Aduan_model->simpan_aduan($inputan);
            redirect('buat_aduan/sukses');
        }

        $this->load->view("header");
        $this->load->view("buat_aduan");
        $this->load->view("footer");
    }

    public function sukses() {
        echo "<h3>Aduan berhasil dikirim!</h3>";
    }
}
