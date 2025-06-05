<?php
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_users');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('login');
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->M_users->get_user($username);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata([
                'user_id' => $user->id,
                'role'    => $user->role,
                'username'=> $user->username
            ]);

            if ($users->role == 'admin') {
                redirect('dashboard/admin');
            } elseif ($users->role == 'pegawai') {
                redirect('dashboard/pegawai');
            } elseif ($users->role == 'ortu') {
                redirect('dashboard/ortu');
            }
        } else {
            $this->session->set_flashdata('error', 'Login gagal!');
            redirect('auth');
        }
    }

    public function create() {
        $this->load->view('item/form');
    }

    public function new() {
        $data = [
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
        ];
        $this->M_users->insert($data);
        redirect('item');
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
