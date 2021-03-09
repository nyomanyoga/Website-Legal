<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeraturanUniv extends CI_Controller {
    public function index(){
        $data['title'] = 'Peraturan Universitas';
        $this->load->view('templates/header', $data);
		$this->load->view('regulasi/peraturanuniv');
		$this->load->view('templates/footer');
    }
}