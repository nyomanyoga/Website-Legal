<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KonsultasiHukum extends CI_Controller {
    public function index(){
        $data['title'] = 'Konsultasi Hukum';
        $this->load->view('templates/header', $data);
		$this->load->view('layanan/detailLayanan');
		$this->load->view('templates/footer');
    }
}