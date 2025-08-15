<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_siswa');
	}

	public function index()
	{
		$data['siswa'] = $this->M_siswa->get_all();
		$data['title'] = 'Data Siswa';
		$data['content'] =  $this->load->view('admin/siswa/index', $data, true);
		$this->load->view('admin/layout/master', $data);
	}

	public function detail()
	{
		$data['title'] = 'Detail Siswa';
		$data['content'] =  $this->load->view('admin/siswa/detail', $data, true);
		$this->load->view('admin/layout/master', $data);
	}
	public function input()
	{
	    $data['title'] = 'Data Siswa';
	    // $data['kelas'] = $this->db->get('kelas')->result();
	    $data['kelas'] = $this->M_kelas->get_all();
	    log_message('error', 'data tes: '. json_encode($data['kelas']));

	    // Validasi form
	    $this->form_validation->set_rules('nama', 'Nama', 'required');
	    $this->form_validation->set_rules('nis', 'NIS', 'required');
	    $this->form_validation->set_rules('kelas_id', 'Kelas', 'required');
	    $this->form_validation->set_rules('nama_orangtua', 'Nama Orang Tua', 'required');
	    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
	    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');

	    if ($this->form_validation->run() == FALSE) {
	        $data['content'] = $this->load->view('admin/siswa/form_input', $data, true);
	        $this->load->view('admin/layout/master', $data);
	    } else {
	        // Upload foto
	        $config['upload_path']   = './assets/foto_siswa';
	        $config['allowed_types'] = 'jpg|jpeg|png';
	        $config['max_size']      = 2048;
	        $config['encrypt_name']  = TRUE;
	        $this->load->library('upload', $config);

	        $foto = '';
	        if ($this->upload->do_upload('foto')) {
	            $upload_data = $this->upload->data();
	            $foto = $upload_data['file_name'];
	        }

	        // Ambil data form
	        $datas = [
	            'nama'    => $this->input->post('nama'),
	            'nis'           => $this->input->post('nis'),
	            'kelas_id'      => $this->input->post('kelas_id'),
	            'nama_orangtua' => $this->input->post('nama_orangtua'),
	            'alamat'        => $this->input->post('alamat'),
	            'tanggal_lahir'     => $this->input->post('tgl_lahir'),
	            'foto'          => $foto
	        ];

	        $this->M_siswa->insert($datas);
	        redirect('siswa');
	    }
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
