<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index() {
        // Tangani hanya POST request
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo json_encode([
                'status' => false,
                'message' => 'Hanya metode POST yang diizinkan'
            ]);
            return;
        }

        // Ambil data dari form
        $kategori = $this->input->post('kategori');
        $lokasi = $this->input->post('lokasi');
        $nama = $this->input->post('nama');

        // Simpan ke database di sini jika perlu
        // Untuk sekarang, kirim respon sukses
        echo json_encode([
            'status' => true,
            'message' => 'Data berhasil disimpan',
            'data' => compact('kategori', 'lokasi', 'nama')
        ]);
    }
}
