<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeputusanDekan extends CI_Controller {
    public function index(){
        $data['title'] = 'Keputusan Dekan';
        $data['dekan'] = ['FTE', 'FRI', 'FIF', 'FEB', 'FKB', 'FIK', 'FIT'];
        $this->load->view('templates/header', $data);
		$this->load->view('regulasi/keputusandekan');
		$this->load->view('templates/footer');
    }
}