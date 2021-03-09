<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RelasiNota extends CI_Controller {
    public function index(){
        $data['title'] = 'Relasi Nota Kesepahaman Dan Perjanjian Kerjasama';
        $this->load->view('templates/header', $data);
		$this->load->view('NaskahKerjasama/relasiKordinasi');
		$this->load->view('templates/footer');
    }
}