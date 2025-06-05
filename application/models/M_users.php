<?php
class M_users extends CI_Model {

    public function get_all() {
        return $this->db->get('users')->result();
    }

    public function get_user($username) {
        return $this->db->get_where('users', ['username' => $username])->row();
    }

    public function get_by_id($id) {
        return $this->db->get_where('users', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('users', $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('users', $data);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete('users');
    }
}
