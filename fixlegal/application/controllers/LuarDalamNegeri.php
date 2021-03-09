<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LuarDalamNegeri extends CI_Controller {
    public function index(){
        $data['title'] = 'Dalam Dan Luar Negeri';
        $this->load->view('templates/header', $data);
		$this->load->view('NaskahKerjasama/luarDalamNegeri');
		$this->load->view('templates/footer');
    }
}