<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Legal Telkom University';
		$data['regulasi'] = ['Peraturan Universitas','Keputusan Rektor','Keputusan Wakil Rektor','Keputusan Dekan'];
		$data['layanan'] = ['Prosedur','Instruksi Kerja','Penyelesaian Beda Pendapat','Konsultasi Hukum'];
		$data['regurl'] = ['peraturanuniv','keputusanrektor','keputusanwklrektor','keputusandekan'];
		$data['layurl'] = ['prosedur','instruksikerja','penyelesaianbepe','konsultasihukum'];
		$this->load->view('templates/header', $data);
		$this->load->view('utama', $data);
		$this->load->view('templates/footer');
	}

	public function coba()
	{
        $data['title'] = 'Galeri';
        $data['galeri'] = ['Kegiatan BRI','Kegiatan Akhir Tahun','Kerjasama FBI dengan Telkom','Sinergi Telkom University'];
        $data['tanggal'] = ['1 januari 2020','20 februari 2020','4 maret 2020','24 juni 2020'];
        $this->load->view('templates/header', $data);
        $this->load->view('profile/galeri', $data);
        $this->load->view('templates/footer');
	}

	public function sejarah(){
        $data['title'] = 'Sejarah';
        $this->load->view('templates/header', $data);
		$this->load->view('profile/sejarahStruktur');
		$this->load->view('templates/footer');
    }
}