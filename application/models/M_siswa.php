<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

    public function get_all()
    {
        $this->db->select('siswa.*, kelas.nama_kelas');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.kelas_id', 'left');
        return $this->db->get()->result();
    }

    public function get_kelas($kelas_id)
    {
        return $this->db->get_where('siswa', ['kelas_id' => $kelas_id])->row();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('siswa', ['id' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert('siswa', $data);
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update('siswa', $data);
    }

    public function delete($id)
    {
        return $this->db->where('id', $id)->delete('siswa');
    }

}
