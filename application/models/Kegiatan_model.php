<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model {

	public function insert($id_petugas, $foto){
		$data = array(
			'ID_KEGIATAN'	=> $this->generateID(),
			'ID_ADMIN'		=> $id_petugas,
			'NM_KEGIATAN'		=> $this->input->post('NM_KEGIATAN'),
			'JNS_KEGIATAN'		=> $this->input->post('JNS_KEGIATAN'),
			'DESC_KEGIATAN'		=> $this->input->post('DESC_KEGIATAN'),
			'TGL_MULAI'		=> $this->input->post('TGL_MULAI'),
			'TGL_SELESAI'		=> $this->input->post('TGL_SELESAI'),
			'RP_ANGGARAN'			=> $this->input->post('RP_ANGGARAN'),
			'STATUS'			=> $this->input->post('STATUS'),
			'FOTO'			=> $foto['file_name'],
			'D_CREATED'		=> date('Ymd')
			 );

		$this->db->insert('kegiatan', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function update($id, $foto){
		$data = array(
			'NM_KEGIATAN'			=> $this->input->post('NM_KEGIATAN'),
			'JNS_KEGIATAN'		=> $this->input->post('JNS_KEGIATAN'),
			'DESC_KEGIATAN'		=> $this->input->post('DESC_KEGIATAN'),
			'TGL_MULAI'		=> $this->input->post('TGL_MULAI'),
			'TGL_SELESAI'		=> $this->input->post('TGL_SELESAI'),
			'RP_ANGGARAN'		=> $this->input->post('RP_ANGGARAN'),
			'FOTO'		=> $foto['file_name']
		);

		$this->db->where('ID_KEGIATAN', $id)->update('kegiatan', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function generateID(){
		$query = $this->db->get('kegiatan');
        if ($query->num_rows() == 0) {
            // Jika tabel kosong, kembalikan ID awal
            return 'KGN001';
        }

		$query = $this->db->order_by('ID_KEGIATAN', 'DESC')->limit(1)->get('kegiatan')->row('ID_KEGIATAN');	
		$lastNo = substr($query, 3);
		$next = $lastNo + 1;
		$kd = 'KGN';
		return $kd.sprintf('%03s', $next);
	}

	public function getList(){
		return $query = $this->db->order_by('id_kegiatan','ASC')->get('kegiatan')->result();
	}

	public function getCount(){
		return $this->db->count_all('kegiatan');
	}

	public function getDetail($id){
		return $this->db->where('ID_KEGIATAN', $id)->get('kegiatan')->row();
	}

	public function checkAvailability($id){
		$query = $this->db->where('ID_KEGIATAN', $id)->get('kegiatan');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('ID_KEGIATAN', $id)->delete('kegiatan');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}

/* End of file Kegiatan_model.php */
/* Location: ./application/models/Kegiatan_model.php */