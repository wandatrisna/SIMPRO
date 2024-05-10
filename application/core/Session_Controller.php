<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session_Controller extends CI_Controller {

public function __construct() {
    parent::__construct();
    //$this->check_session();
}

// Fungsi untuk pengecekan session
protected function check_session() {
    if (!$this->session->userdata('logged_in')) {
        // Sesi tidak aktif, arahkan pengguna kembali ke halaman login
        redirect('Auth'); // Ganti 'login' dengan lokasi URL halaman login Anda
    }
}
}
?>