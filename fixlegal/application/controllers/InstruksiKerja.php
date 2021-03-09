<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InstruksiKerja extends CI_Controller {
    public function index(){
        $data['title'] = 'Instruksi Kerja';
        $this->load->view('templates/header', $data);
		$this->load->view('layanan/detailLayanan');
		$this->load->view('templates/footer');
    }
}