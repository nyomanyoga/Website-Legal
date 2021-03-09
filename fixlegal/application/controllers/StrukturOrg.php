<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturOrg extends CI_Controller {
    public function index(){
        $data['title'] = 'Struktur Organisasi';
        $this->load->view('templates/header', $data);
		$this->load->view('profile/sejarahStruktur');
		$this->load->view('templates/footer');
    }
}