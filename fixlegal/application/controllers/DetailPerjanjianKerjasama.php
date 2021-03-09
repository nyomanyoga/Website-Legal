<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPerjanjianKerjasama extends CI_Controller {
    public function index(){
        $data['title'] = 'DetailPerjanjianKerjasama';
        $data['dalamluarNegeri'] = ['Dalam Negeri', 'Luar Negeri'];
        $this->load->view('templates/header', $data);
		$this->load->view('NaskahKerjasama/DetailNaskahKerjasama/detailPerjanjianKerjasama');
		$this->load->view('templates/footer');
    }
}