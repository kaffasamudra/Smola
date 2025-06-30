<?php

/** 
 * @property M_pegawai $M_pegawai
 * @property form_validation $form_validation
 */

class Kepegawaian extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_pegawai', 'M_users']);
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['users'] = $this->M_users->get_all();
        $data['pegawai'] = $this->M_pegawai->get_all();
        $data['title'] = 'Kepegawaian - Data Pegawai';
        $data['content'] =  $this->load->view('admin/kepegawaian/index', $data, true);
        $this->load->view('admin/layout/master', $data);
    }
    public function input()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telp', 'No Telepon', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('user_id', 'Email', 'required');
        $this->form_validation->set_rules('foto', 'Foto', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Kepegawaian - Tambah Pegawai';
            $data['content'] =  $this->load->view('admin/kepegawaian/input', $data, true);
            $this->load->view('admin/layout/master', $data);
        } else {
            $config['upload_path']          = './assets/images/pegawai/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                $data['error'] = $error['error'];
                $data['title'] = 'Kepegawaian - Tambah Pegawai';
                $data['content'] =  $this->load->view('admin/kepegawaian/input', $data, true);
                $this->load->view('admin/layout/master', $data);
            } else {
                $data = [
                    'nama'     => $this->input->post('nama'),
                    'nip'      => $this->input->post('nip'),
                    'alamat'   => $this->input->post('alamat'),
                    'telp'     => $this->input->post('telp'),
                    'jabatan'  => $this->input->post('jabatan'),
                    'user_id'  => $this->input->post('user_id'),
                    'foto'     => $this->upload->data('foto')
                ];
                $this->M_pegawai->insert($data);
                redirect('admin_kepegawaian_index');
            }
        }
    }
    public function edit()
    {
        $data['title'] = 'Kepegawaian - Edit Pegawai';
        $data['content'] =  $this->load->view('admin/kepegawaian/edit', $data, true);
        $this->load->view('admin/layout/master', $data);
    }
    public function delete()
    {
        $data['title'] = 'Kepegawaian - Hapus Pegawai';
        $data['content'] =  $this->load->view('admin/kepegawaian/delete', $data, true);
        $this->load->view('admin/layout/master', $data);
    }
}
