<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kas_model');
		if ($this->session->userdata('logged_in') == false) {
			redirect('welcome');
		}
	}

	public function index()
	{
		// Mendapatkan tanggal mulai dan tanggal selesai dari input pengguna
		$tanggal_mulai = $this->input->get('tanggal_mulai');
		$tanggal_selesai = $this->input->get('tanggal_selesai');
		$idtf = $this->input->get('idtf');
		// Memuat model dan memanggil fungsi untuk mendapatkan daftar kas dengan filter tanggal
		$data['list'] = $this->Kas_model->getKasList($tanggal_mulai, $tanggal_selesai, $idtf);
		// Memuat total data kas (jika diperlukan)
		$data['total'] = $this->Kas_model->getCount();
		// Lain-lain seperti title dan view tetap sama
		$data['title'] = 'Buku Kas';
		$data['primary_view'] = 'kas/laporan_kas';

		// Memuat view dengan data yang telah dimuat
		$this->load->view('template_view', $data);


		// $data['title'] = 'Kas';
		// $data['list'] = $this->Kas_model->getKasList();
		// $data['primary_view'] = 'kas/laporan_kas';
		// $data['total'] = $this->Kas_model->getCount();
		// $this->load->view('template_view', $data);
	}

	public function viewKasRekap()
	{
		// Mendapatkan tanggal mulai dan tanggal selesai dari input pengguna
		$tanggal_mulai = $this->input->get('tanggal_mulai');
		$tanggal_selesai = $this->input->get('tanggal_selesai');
		// Memuat model dan memanggil fungsi untuk mendapatkan daftar kas dengan filter tanggal
		$data['list'] = $this->Kas_model->getKasRekapList($tanggal_mulai, $tanggal_selesai);
		// Memuat total data kas (jika diperlukan)
		$data['total'] = $this->Kas_model->getCount();
		// Lain-lain seperti title dan view tetap sama
		$data['title'] = 'Rekap Kas';
		$data['primary_view'] = 'kas/laporan_kas_rekap';

		// Memuat view dengan data yang telah dimuat
		$this->load->view('template_view', $data);


		// $data['title'] = 'Kas';
		// $data['list'] = $this->Kas_model->getKasList();
		// $data['primary_view'] = 'kas/laporan_kas';
		// $data['total'] = $this->Kas_model->getCount();
		// $this->load->view('template_view', $data);
	}



	public function addKasmasuk()
	{
		$data = array(
			'title'			=> 'Kas',
			'kode'			=> $this->Kas_model->generateID(),
			'petugas'		=> $this->Kas_model->getPetugas(),
			'anggota'		=> $this->Kas_model->getAgtList(),
			'primary_view'	=> 'kas/entry_kas_masuk'
		);
		$this->load->view('template_view', $data);
	}

	public function addKaskeluar()
	{
		$data = array(
			'title'			=> 'Kas',
			'kode'			=> $this->Kas_model->generateID(),
			'petugas'		=> $this->Kas_model->getPetugas(),
			'anggota'		=> $this->Kas_model->getAgtList(),
			'primary_view'	=> 'kas/entry_kas_keluar'
		);
		$this->load->view('template_view', $data);
	}
	public function searchAgtName()
	{
		$kode = $this->input->post('id');
		$anggota = $this->Kas_model->cariAnggota($kode);
		if ($anggota->num_rows() > 0) {
			$agt = $anggota->row_array();
			echo $agt['FULL_NAME'];
		}
	}


	public function submitKasMasuk()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('slcAgta', 'Nama Anggota', 'trim|required');
			$this->form_validation->set_rules('TGL_KAS', 'Tanggal Kas', 'trim|required');
			$this->form_validation->set_rules('RP_MASUK', 'Jumlah Kas', 'trim|required');

			if ($this->form_validation->run() == true) {
				if ($this->Kas_model->insertKasMasuk() == true) {
					$this->session->set_flashdata('announce', 'Berhasil menyimpan data');
					redirect('kas');
				} else {
					$this->session->set_flashdata('announce', 'Gagal menyimpan data');
					redirect('kas/addKasmasuk');
				}
			} else {
				$this->session->set_flashdata('announce', validation_errors());
				redirect('kas/addKasmasuk');
			}
		}
	}
	public function submitKasKeluar()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('slcAgta', 'Nama Anggota', 'trim|required');
			$this->form_validation->set_rules('TGL_KAS', 'Tanggal Kas', 'trim|required');
			$this->form_validation->set_rules('RP_KELUAR', 'Jumlah Kas', 'trim|required');

			if ($this->form_validation->run() == true) {
				if ($this->Kas_model->insertKasKeluar() == true) {
					$this->session->set_flashdata('announce', 'Berhasil menyimpan data');
					redirect('kas');
				} else {
					$this->session->set_flashdata('announce', 'Gagal menyimpan data');
					redirect('kas/addKaskeluar');
				}
			} else {
				$this->session->set_flashdata('announce', validation_errors());
				redirect('kas/addKaskeluar');
			}
		}
	}

	public function delete()
	{
		$id = $this->input->get('rcgn');
		if ($this->Kas_model->delete($id) == true) {
			$this->session->set_flashdata('announce', 'Berhasil menghapus data');
			redirect('kas');
		} else {
			$this->session->set_flashdata('announce', 'Gagal menghapus data');
			redirect('kas');
		}
	}
}
