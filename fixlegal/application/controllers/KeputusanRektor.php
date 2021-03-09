<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeputusanRektor extends CI_Controller {
    public function index(){
        $data['title'] = 'Keputusan Rektor';
        $this->load->view('templates/header', $data);
		$this->load->view('regulasi/keputusanrektor');
		$this->load->view('templates/footer');
    }
}