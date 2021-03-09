<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KordinasiLaporan extends CI_Controller {
    public function index(){
        $data['title'] = 'Kordinasi Dan Laporan Kerjasama Berbasiskan Sistem Elektronik';
        $this->load->view('templates/header', $data);
		$this->load->view('NaskahKerjasama/relasiKordinasi');
		$this->load->view('templates/footer');
    }
}