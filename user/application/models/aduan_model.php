<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function simpan_aduan($data) {
        $insert = array(
            'judul'             => $data['judul'],
            'deskripsi'         => $data['deskripsi'],
            'kategori_id'       => $data['kategori'],
            'wilayah'           => $data['wilayah'],
            'latitude'          => $data['lat'],
            'longitude'         => $data['lng'],
            'nama'              => $data['nama'],
            'status'            => $data['status'],
            'whatsapp'          => $data['whatsapp'],
            'kode_verifikasi'   => $data['kode_verifikasi'],
            'tanggal_kejadian'  => $data['tanggal_kejadian'],  // ditambahkan
            'tanggal'           => date('Y-m-d H:i:s') // waktu aduan dibuat
        );

        return $this->db->insert('pengaduan', $insert);
    }
}
