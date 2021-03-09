<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailSinergiRelasi extends CI_Controller {
    public function index(){
        $data['title'] = 'DetailSinergiRelasi';
        $data['abpm'] = ['Akademi', 'Bisnis', 'Pemerintahan', 'Media'];
        $this->load->view('templates/header', $data);
		$this->load->view('NaskahKerjasama/DetailNaskahKerjasama/detailSinergiRelasi');
		$this->load->view('templates/footer');
    }
}