<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeputusanWklRektor extends CI_Controller {
    public function index(){
        $data['title'] = 'Keputusan Wakil Rektor';
        $data['wklrektor'] = ['Bidang Akademi','Bidan Sumberdaya dan Sistem Informasi','Bidang Admission dan Kantor Urusan Internasional','Bidang Penelitian dan Kemahasiswaan'];
        $this->load->view('templates/header', $data);
		$this->load->view('regulasi/keputusanwklrektor');
		$this->load->view('templates/footer');
    }
}