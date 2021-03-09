<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SinergiRelasi extends CI_Controller {
    public function index(){
        $data['title'] = 'Sinergi Relasi Kerjasama';
        $data['detailNaskahKerjasama'] = ['FTE', 'FRI', 'FIF', 'FEB', 'FKB', 'FIK', 'FIT', 'Dir. Akademi', 'PSAL', 'Dir. Admission', 'PPM', 'Dir. Pengelolaan Mahasiswa', 'Dir. SUV'];
        $this->load->view('templates/header', $data);
		$this->load->view('NaskahKerjasama/sinergiRelasi');
		$this->load->view('templates/footer');
    }
}