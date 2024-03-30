<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas_model extends CI_Model
{

    public function generateID()
    {
        // Check if the table is empty
        $query = $this->db->get('kas');
        if ($query->num_rows() == 0) {
            // Jika tabel kosong, kembalikan ID awal
            return 'K' . date('ymd') . '001';
        }

        $today = date('ymd');
        // $query = mysql_query("select max(id_transaksi) as last from transaksi where id_transaksi like '$today%'");
        $query = $this->db->order_by('ID_KAS', 'desc')->limit(1)->get('kas')->row('ID_KAS');
        $lastDate = substr($query, 1, 6);
        $lastNumber = (int) substr($query, -3);
        $nowID = $today === $lastDate ? $lastNumber + 1 : 1;
        $nowID = 'K' . $today . sprintf('%03s', $nowID);

        return $nowID;
    }

    public function getPetugas()
    {
        return $this->db->where('USERNAME', $this->session->userdata('username'))->get('admin')->row('FULLNAME');
    }

    public function getAgtList()
    {
        $query = $this->db->get('anggota')->result();
        return $query;
    }

    public function cariAnggota($kode)
    {
        $hm = $this->db->where('ID_ANGGOTA', $kode)->get('anggota');
        return $hm;
    }

    public function getPtgID()
    {
        return $this->db->where('USERNAME', $this->session->userdata('username'))
            ->get('admin')->row('ID_ADMIN');
    }

    public function insertKasMasuk()
    {
        $kas = array(
            'ID_KAS'     => $this->input->post('ID_KAS'),
            'ID_ANGGOTA'    => $this->input->post('slcAgta'),
            'ID_ADMIN'      => $this->getPtgID(),
            'TGL_KAS'    => $this->input->post('TGL_KAS'),
            'KETERANGAN'      => $this->input->post('KETERANGAN'),
            'RP_MASUK'      => $this->input->post('RP_MASUK'),
            'STATS'         => 'Belum Kembali'
        );
        $this->db->insert('kas', $kas);
        $this->db->affected_rows() > 0 ? $y = true : $y = false;
        return $y;
    }
    public function insertKasKeluar()
    {
        $kas = array(
            'ID_KAS'     => $this->input->post('ID_KAS'),
            'ID_ANGGOTA'    => $this->input->post('slcAgta'),
            'ID_ADMIN'      => $this->getPtgID(),
            'TGL_KAS'    => $this->input->post('TGL_KAS'),
            'KETERANGAN'      => $this->input->post('KETERANGAN'),
            'RP_KELUAR'      => $this->input->post('RP_KELUAR'),
            'STATS'         => 'Belum Kembali'
        );
        $this->db->insert('kas', $kas);
        $this->db->affected_rows() > 0 ? $y = true : $y = false;
        return $y;
    }

    public function getKas1List()
    {
        return $query = $this->db->order_by('id_kas', 'ASC')->get('kas')->result();
    }

    public function getKasList($tanggal_mulai = '', $tanggal_selesai = '', $idtf = '')
    {
        // First, execute the statement to set @saldo
        $this->db->query("SET @saldo = 0;");

        // Memilih kolom yang diperlukan
        $this->db
            ->select('k.ID_KAS, k.TGL_KAS, k.ID_ANGGOTA, a.FULL_NAME, k.KETERANGAN, 
        IFNULL(k.RP_MASUK,0) as RP_MASUK, IFNULL(k.RP_KELUAR,0) as RP_KELUAR, (@saldo := @saldo + (
                  IFNULL(k.RP_MASUK, 0) - IFNULL(k.RP_KELUAR, 0))) as Saldo, ad.ID_ADMIN,ad.FULLNAME')
            ->join('anggota a', 'k.ID_ANGGOTA = a.ID_ANGGOTA', 'left')
            ->join('admin ad', 'k.ID_ADMIN = ad.ID_ADMIN', 'left');

        // Menambahkan kondisi WHERE untuk filter tanggal jika ada
        if (!empty($tanggal_mulai) && !empty($tanggal_selesai)) {
            $this->db->where('k.TGL_KAS >=', $tanggal_mulai);
            $this->db->where('k.TGL_KAS <=', $tanggal_selesai);
        }
        if (!empty($idtf)) {
            $this->db->where('a.ID_ANGGOTA =', $idtf);
        }

        // Menyusun data berdasarkan ID_KAS secara menaik
        $this->db->order_by('k.TGL_KAS,k.ID_KAS', 'ASC');

        // Mengembalikan hasil query
        return $this->db->get('kas k')->result();
        // // First, execute the statement to set @saldo
        // $this->db->query("SET @saldo = 0;");

        // $this->db
        //     ->select('k.ID_KAS, k.TGL_KAS, k.ID_ANGGOTA, a.FULL_NAME, k.KETERANGAN, 
        // IFNULL(k.RP_MASUK,0) as RP_MASUK, IFNULL(k.RP_KELUAR,0) as RP_KELUAR, (@saldo := @saldo + (
        //           IFNULL(k.RP_MASUK, 0) - IFNULL(k.RP_KELUAR, 0))) as Saldo, ad.ID_ADMIN,ad.FULLNAME')
        //     ->join('anggota a', 'k.ID_ANGGOTA = a.ID_ANGGOTA')
        //     ->join('admin ad', 'k.ID_ADMIN = ad.ID_ADMIN')
        //     ->order_by('k.ID_KAS', 'ASC');
        // return $this->db->get('kas k')->result();
    }

    public function getKasRekapList($tanggal_mulai = '', $tanggal_selesai = '')
    {
        // First, execute the statement to set @saldo
        $this->db->query("SET @saldo2 = 0;");

        // Memilih kolom yang diperlukan
        $this->db
            ->select('a.ID_ANGGOTA, a.FULL_NAME,
            sum(IFNULL(k.RP_MASUK,0)) RP_MASUK, sum(IFNULL(k.RP_KELUAR,0)) RP_KELUAR, @saldo2 := @saldo2 + (
            sum(IFNULL(k.RP_MASUK,0)) - sum(IFNULL(k.RP_KELUAR,0))) as Saldo')
            ->join('anggota a', 'k.ID_ANGGOTA = a.ID_ANGGOTA');

        // Menambahkan kondisi WHERE untuk filter tanggal jika ada
        if (!empty($tanggal_mulai) && !empty($tanggal_selesai)) {
            $this->db->where('k.TGL_KAS >=', $tanggal_mulai);
            $this->db->where('k.TGL_KAS <=', $tanggal_selesai);
        }

        // Menyusun data berdasarkan ID_KAS secara menaik
        $this->db->group_by('a.FULL_NAME');
        $this->db->order_by('a.FULL_NAME', 'ASC');

        // Mengembalikan hasil query
        return $this->db->get('kas k')->result();
        // // First, execute the statement to set @saldo
        // $this->db->query("SET @saldo = 0;");

        // $this->db
        //     ->select('k.ID_KAS, k.TGL_KAS, k.ID_ANGGOTA, a.FULL_NAME, k.KETERANGAN, 
        // IFNULL(k.RP_MASUK,0) as RP_MASUK, IFNULL(k.RP_KELUAR,0) as RP_KELUAR, (@saldo := @saldo + (
        //           IFNULL(k.RP_MASUK, 0) - IFNULL(k.RP_KELUAR, 0))) as Saldo, ad.ID_ADMIN,ad.FULLNAME')
        //     ->join('anggota a', 'k.ID_ANGGOTA = a.ID_ANGGOTA')
        //     ->join('admin ad', 'k.ID_ADMIN = ad.ID_ADMIN')
        //     ->order_by('k.ID_KAS', 'ASC');
        // return $this->db->get('kas k')->result();
    }

    public function getCount()
    {
        return $this->db->count_all('kas');
    }

    public function delete($id)
    {
        $this->db->where('ID_KAS', $id)->delete('kas');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
/* End of file Peminjaman_model.php */
/* Location: ./application/models/Peminjaman_model.php */