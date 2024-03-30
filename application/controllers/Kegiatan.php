<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kegiatan_model');
		$this->load->model('Petugas_model');
		if ($this->session->userdata('logged_in') == false) {
			redirect('welcome');
		}
	}

	public function index()
	{
		$data['title'] = 'Kegiatan';
		$data['list'] = $this->Kegiatan_model->getList();
		$data['primary_view'] = 'kegiatan/kegiatan_view';
		$data['total'] = $this->Kegiatan_model->getCount();
		$this->load->view('template_view', $data);
	}

	public function detail()
	{
		$data['title'] = 'Detail Kegiatan';

		//GET : Detail data
		$id = $this->input->get('idtf');
		$data['row'] = $this->Kegiatan_model->getDetail($id);
		//CHECK : Data Availability
		if ($this->Kegiatan_model->checkAvailability($id) == true) {
			$data['primary_view'] = 'kegiatan/detail_kegiatan_view';
		} else {
			$data['primary_view'] = '404_view';
		}
		$this->load->view('template_view', $data);
	}

	public function add()
	{
		$data['title'] = 'Tambah Kegiatan';
		$data['primary_view'] = 'kegiatan/add_kegiatan_view';
		$this->load->view('template_view', $data);
	}

	public function edit()
	{
		$id = $this->input->get('idtf');
		//CHECK : Data Availability
		if ($this->Kegiatan_model->checkAvailability($id) == true) {
			$data['primary_view'] = 'kegiatan/edit_kegiatan_view';
		} else {
			$data['primary_view'] = '404_view';
		}
		$data['title'] = 'Edit Kegiatan';
		$data['detail'] = $this->Kegiatan_model->getDetail($id);
		//exit(json_encode($this->Kegiatan_model->getDetail($id)));
		$this->load->view('template_view', $data);
	}

	public function submit()
	{
		if ($this->input->post('t')) {
			$this->form_validation->set_rules('NM_KEGIATAN', 'Nama Kegiatan', 'trim|required');
			$this->form_validation->set_rules('JNS_KEGIATAN', 'Jenis Kegiatan', 'trim|required');
			$this->form_validation->set_rules('DESC_KEGIATAN', 'Deskripsi Kegiatan', 'trim|required');
			$this->form_validation->set_rules('TGL_MULAI', 'Tanggal Mulai Kegiatan', 'trim|required|date');
			$this->form_validation->set_rules('TGL_SELESAI', 'Tanggal Selesai Kegiatan', 'trim|required|date');

			if ($this->form_validation->run() == true) {
				$config['upload_path'] = './assets/images/upload/kegiatan/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '2000';

				$this->load->library('upload', $config);

				//GET : Petugas ID
				$username = $this->session->userdata('username');
				$id_petugas = $this->Petugas_model->getID($username);

				if ($this->upload->do_upload('foto')) {
					if ($this->Kegiatan_model->insert($id_petugas, $this->upload->data()) == true) {
						$this->session->set_flashdata('announce', 'Berhasil menyimpan data');
						redirect('kegiatan/add');
					} else {
						$this->session->set_flashdata('announce', 'Gagal menyimpan data');
						redirect('kegiatan/add');
					}
				} else {
					$this->session->set_flashdata('announce', $this->upload->display_errors());
					redirect('kegiatan/add');
				}
			} else {
				$this->session->set_flashdata('announce', validation_errors());
				redirect('kegiatan/add');
			}
		}
	}

	public function submitEdit()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('NM_KEGIATAN', 'Nama Kegiatan', 'trim|required');
			$this->form_validation->set_rules('JNS_KEGIATAN', 'Jenis Kegiatan', 'trim|required');
			$this->form_validation->set_rules('DESC_KEGIATAN', 'Deskripsi Kegiatan', 'trim|required');
			$this->form_validation->set_rules('TGL_MULAI', 'Tanggal Mulai Kegiatan', 'trim|required|date');
			$this->form_validation->set_rules('TGL_SELESAI', 'Tanggal Selesai Kegiatan', 'trim|required|date');

			if ($this->form_validation->run() == true) {

				$config['upload_path'] = './assets/images/upload/kegiatan/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '2000';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('fotoedit')) {
					if ($this->Kegiatan_model->update($this->input->post('id'), $this->upload->data()) == true) {
						$this->session->set_flashdata('announce', 'Berhasil menyimpan data');
						//redirect('kegiatan/edit?idtf=' . $this->input->post('id'));
						redirect('kegiatan');
					} else {
						$this->session->set_flashdata('announce', 'Gagal menyimpan data');
						redirect('kegiatan/edit?idtf=' . $this->input->post('id'));
					}
				 } else {
				 	$this->session->set_flashdata('announce', $this->upload->display_errors());
				 	redirect('kegiatan/edit?idtf=' . $this->input->post('id'));
				 }
			} else {
				$this->session->set_flashdata('announce', validation_errors());
				redirect('buku/edit?idtf=' . $this->input->post('id'));
			}
		}
	}

	public function delete()
	{
		$id = $this->input->get('rcgn');
		if ($this->Kegiatan_model->delete($id) == true) {
			$this->session->set_flashdata('announce', 'Berhasil menghapus data');
			redirect('kegiatan');
		} else {
			$this->session->set_flashdata('announce', 'Gagal menghapus data');
			redirect('kegiatan');
		}
	}
}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/Kegiatan.php */