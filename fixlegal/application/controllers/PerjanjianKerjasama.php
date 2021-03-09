<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerjanjianKerjasama extends CI_Controller {
    public function index(){
        $data['title'] = 'Perjanjian Kerjasama (MoA)';
        $data['detailNaskahKerjasama'] = ['FTE', 'FRI', 'FIF', 'FEB', 'FKB', 'FIK', 'FIT', 'Dir. Akademi', 'PSAL', 'Dir. Admission', 'PPM', 'Dir. Pengelolaan Mahasiswa', 'Dir. SUV'];
        $this->load->view('templates/header', $data);
		$this->load->view('NaskahKerjasama/perjanjianKerjasama');
		$this->load->view('templates/footer');
    }
}