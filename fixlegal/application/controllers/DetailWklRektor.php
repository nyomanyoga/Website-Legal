<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailWklRektor extends CI_Controller {
    public function index(){
        $data['title'] = 'Keputusan Wakil Rektor';
        $this->load->view('templates/header', $data);
		$this->load->view('regulasi/detailwklrektor');
		$this->load->view('templates/footer');
    }
}