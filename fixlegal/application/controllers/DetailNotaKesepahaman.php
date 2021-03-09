<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailNotaKesepahaman extends CI_Controller {
    public function index(){
        $data['title'] = 'DetailNotaKesepahaman';
        $data['dalamluarNegeri'] = ['Dalam Negeri', 'Luar Negeri'];
        $this->load->view('templates/header', $data);
		$this->load->view('NaskahKerjasama/DetailNaskahKerjasama/detailNotaKesepahaman');
		$this->load->view('templates/footer');
    }
}