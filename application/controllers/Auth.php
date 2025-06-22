<?php
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_users');
        $this->load->helper('url');
    }

    public function login() {
        $this->load->view('login');
    }

    public function loginn() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->M_users->get_user($email);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata([
                'user_id' => $user->id,
                'role'    => $user->role,
                'email'=> $user->email
            ]);

            if ($user->role == 'admin') {
                redirect('admin_dashboard');
            } elseif ($user->role == 'pegawai') {
                redirect('pegawai_dashboard');
            } elseif ($user->role == 'ortu') {
                redirect('ortu_dashboard');
            }
        } else {
            $this->session->set_flashdata('error', 'Login gagal!');
            redirect('login');
        }
    }

    public function register() {
        $this->load->view('ortu/register');
    }

    public function registerr() {
        $this->load->model('M_users');

        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password2 = $this->input->post('password2');

        if ($this->M_users->get_user($username)) {
            $this->session->set_flashdata('error', 'Username sudah digunakan!');
            redirect('auth/register');
            return;
        }

        if (strlen($password) < 6) {
            $this->session->set_flashdata('error', 'Password minimal 6 karakter!');
            redirect('auth/register');
            return;
        }

        if ($password !== $password2) {
            $this->session->set_flashdata('error', 'Konfirmasi password tidak cocok!');
            redirect('auth/register');
            return;
        }

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $hash,
            'role'     => 'ortu'
        ];

        $this->db->insert('users', $data);
        $this->session->set_flashdata('success', 'Berhasil daftar! Silakan login.');
        redirect('login');
    }

    public function edit($id) {
        $data['item'] = $this->M_users->get_by_id($id);
        $this->load->view('item/form', $data);
    }

    public function update($id) {
        $data = [
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
        ];
        $this->M_users->update($id, $data);
        redirect('item');
    }

    public function delete($id) {
        $this->M_users->delete($id);
        redirect('item');
    }
}
