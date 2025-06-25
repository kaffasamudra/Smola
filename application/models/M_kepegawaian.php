<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_kepegawaian extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function get_all() {
        return $this->db->get('pegawai')->result();
    }

    public function get_user($user_id) {
        return $this->db->get_where('pegawai', ['user_id' => $user_id])->row();
    }

    public function get_by_id($id) {
        return $this->db->get_where('pegawai', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('pegawai', $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('pegawai', $data);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete('pegawai');
    }

}