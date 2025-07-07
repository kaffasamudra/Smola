<?php

/** 
 * @property M_pegawai $M_pegawai
 * @property M_users $M_users
 * @property form_validation $form_validation
 */

class Pegawai extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_pegawai', 'M_users']);
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['users'] = $this->M_users->get_all();
        $data['pegawai'] = $this->M_pegawai->get_all();
        $data['title'] = 'Kepegawaian - Data Pegawai';
        $data['content'] =  $this->load->view('admin/pegawai/index', $data, true);
        $this->load->view('admin/layout/master', $data);
    }
    public function edit()
    {
        $data['title'] = 'Kepegawaian - Data Pegawai';
        $id = $this->input->post('edit-id');
        $data['users'] = $this->M_users->get_all();

        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('telp', 'No Telepon', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('user_id', 'Email', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['content'] = $this->load->view('admin/pegawai/index', $data, true);
            $this->load->view('admin/layout/master', $data);
        } else {
            $config['upload_path']          = './assets/images/pegawai/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                $data['pegawai'] = $this->M_pegawai->get_all();
                $data['error'] = $error['error'];
                $data['content'] =  $this->load->view('admin/pegawai/index', $data, true);
                $this->load->view('admin/layout/master', $data);
                return;
            } else {

                $data = [
                    'nip' => $this->input->post('nip'),
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'telp' => $this->input->post('telp'),
                    'jabatan' => $this->input->post('jabatan'),
                    'user_id' => $this->input->post('user_id') == 'null' ? null : $this->input->post('user_id'),
                    'foto'     => $this->upload->data('file_name')
                ];
            }

            $this->M_pegawai->update($id, $data);
            redirect('admin_pegawai_index');
        }
    }
    public function input()
    {
        $data['title'] = 'Kepegawaian - Data Pegawai';
        $data['users'] = $this->M_users->get_all();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telp', 'No Telepon', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('user_id', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['pegawai'] = $this->M_pegawai->get_all();
            $data['content'] =  $this->load->view('admin/pegawai/index', $data, true);
            $this->load->view('admin/layout/master', $data);
        } else {
            $config['upload_path']          = './assets/images/pegawai/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                $data['pegawai'] = $this->M_pegawai->get_all();
                $data['error'] = $error['error'];
                $data['content'] =  $this->load->view('admin/pegawai/index', $data, true);
                $this->load->view('admin/layout/master', $data);
                return;
            } else {
                $data = [
                    'nama'     => $this->input->post('nama'),
                    'nip'      => $this->input->post('nip'),
                    'alamat'   => $this->input->post('alamat'),
                    'telp'     => $this->input->post('telp'),
                    'jabatan'  => $this->input->post('jabatan'),
                    'user_id'  => $this->input->post('user_id'),
                    'foto'     => $this->upload->data('file_name')
                ];
                $this->M_pegawai->insert($data);
                redirect('admin_pegawai_index');
            }
        }
    }
    public function delete()
    {
        $id = $this->input->post('delete-id');
        if ($this->M_pegawai->delete($id)) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data.');
        }
        redirect('admin_pegawai_index');
    }
}
