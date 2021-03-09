<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailDekan extends CI_Controller {
    public function index(){
        $data['title'] = 'Keputusan Dekan';
        $this->load->view('templates/header', $data);
		$this->load->view('regulasi/detaildekan');
		$this->load->view('templates/footer');
    }
}