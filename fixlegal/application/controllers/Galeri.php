<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Galeri';
        $data['galeri'] = ['Kegiatan BRI','Kegiatan Akhir Tahun','Kerjasama FBI dengan Telkom','Sinergi Telkom University'];
        $data['tanggal'] = ['1 januari 2020','20 februari 2020','4 maret 2020','24 juni 2020'];
        $this->load->view('templates/header', $data);
        $this->load->view('profile/galeri', $data);
        $this->load->view('templates/footer');
	}
}