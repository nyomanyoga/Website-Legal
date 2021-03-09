<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {
    public function index(){
        $data['title'] = 'Sejarah';
        $this->load->view('templates/header', $data);
		$this->load->view('profile/sejarahStruktur');
		$this->load->view('templates/footer');
    }
}