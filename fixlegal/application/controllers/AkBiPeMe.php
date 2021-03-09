<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AkBiPeMe extends CI_Controller {
    public function index(){
        $data['title'] = 'Akademi, Bisnis, Pemerintahan, dan Media';
        $this->load->view('templates/header', $data);
		$this->load->view('NaskahKerjasama/akbipeme');
		$this->load->view('templates/footer');
    }
}