<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotaKesepahaman extends CI_Controller {
    public function index(){
        $data['title'] = 'Nota Kesepahaman (MoU)';
        $data['detailNaskahKerjasama'] = ['FTE', 'FRI', 'FIF', 'FEB', 'FKB', 'FIK', 'FIT', 'Dir. Akademi', 'PSAL', 'Dir. Admission', 'PPM', 'Dir. Pengelolaan Mahasiswa', 'Dir. SUV'];
        $this->load->view('templates/header', $data);
		$this->load->view('NaskahKerjasama/notaKesepahaman');
		$this->load->view('templates/footer');
    }
}