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
        $data['users'] = _all('users');
        $data['pegawai'] =  $this->M_pegawai->get_all('pegawai');
        $data['title'] = 'Kepegawaian - Data Pegawai';
        $data['content'] =  $this->load->view('admin/pegawai/index', $data, true);
        $this->load->view('admin/layout/master', $data);
    }
    public function edit()
    {
        $data['title'] = 'Kepegawaian - Data Pegawai';
        $id = $this->input->post('edit-id'); // pastikan input hidden 'edit-id' ada di form
        $data['users'] = $this->M_users->get_all();

        // Validasi form
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('telp', 'No Telepon', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('user_id', 'Email', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            // Kembali ke halaman form dengan modal terbuka
            $data['pegawai'] = $this->M_pegawai->get_all();
            $data['open_modal'] = true;
            $data['content'] = $this->load->view('admin/pegawai/index', $data, true);
            $this->load->view('admin/layout/master', $data);
        } else {
            // Ambil semua data inputan
            $datas = [
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telp' => $this->input->post('telp'),
                'jabatan' => $this->input->post('jabatan'),
                'user_id' => $this->input->post('user_id'),
            ];

            // Konfigurasi upload file
            $config['upload_path']   = './assets/admin/img/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 2048;
            $config['encrypt_name']  = TRUE;

            $this->load->library('upload', $config);

            // Cek jika ada file yang diunggah
            if (!empty($_FILES['foto']['name'])) {
                if ($this->upload->do_upload('foto')) {
                    $upload_data = $this->upload->data();
                    $datas['foto'] = $upload_data['file_name'];
                } else {
                    // Upload gagal, tampilkan error
                    $data['pegawai'] = $this->M_pegawai->get_all();
                    $data['error'] = $this->upload->display_errors();
                    $data['open_modal'] = true;
                    $data['content'] = $this->load->view('admin/pegawai/index', $data, true);
                    $this->load->view('admin/layout/master', $data);
                    return;
                }
            }

            // Update ke database
            $this->M_pegawai->update($id, $datas);

            // Redirect kembali ke halaman index pegawai
            redirect('admin_pegawai_index');
        }
    }
public function input()
{
    $data['title'] = 'Kepegawaian - Data Pegawai';
    $data['users'] = $this->M_users->get_all();

    // Validasi form
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nip', 'NIP', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('telp', 'No Telepon', 'required');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
    $this->form_validation->set_rules('user_id', 'Email', 'required');

    if ($this->form_validation->run() == FALSE) {
        // Kalau validasi gagal, balik ke halaman form
        $data['open_modal'] = true;
        $data['pegawai'] = $this->M_pegawai->get_all();
        $data['content'] = $this->load->view('admin/pegawai/index', $data, true);
        $this->load->view('admin/layout/master', $data);
    } else {
        // Konfigurasi upload foto
        $config['upload_path']   = './assets/admin/img/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 2048;
        $config['encrypt_name']  = TRUE;

        // Buat folder kalau belum ada
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0755, true);
        }

        $this->load->library('upload', $config);

        $foto = "";

        // Kalau ada foto yang dikirim
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $foto = $upload_data['file_name'];
            } else {
                // Gagal upload, tampilkan error
                $data['pegawai'] = $this->M_pegawai->get_all();
                $data['error'] = $this->upload->display_errors();
                $data['open_modal'] = true;
                $data['content'] = $this->load->view('admin/pegawai/index', $data, true);
                $this->load->view('admin/layout/master', $data);
                return;
            }
        }

        // Ambil data satu per satu dari form
        $datas = [
            'nama'    => $this->input->post('nama'),
            'nip'     => $this->input->post('nip'),
            'alamat'  => $this->input->post('alamat'),
            'telp'    => $this->input->post('telp'),
            'jabatan' => $this->input->post('jabatan'),
            'user_id' => $this->input->post('user_id'),
        ];

        // Tambahkan nama file foto jika ada
        if ($foto != "") {
            $datas['foto'] = $foto;
        }

        // Simpan ke database
        $this->M_pegawai->insert($datas);

        // Redirect ke halaman index pegawai
        redirect('admin_pegawai_index');
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
