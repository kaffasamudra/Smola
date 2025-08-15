<?php
class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('M_visit');

        // Catat kunjungan setiap kali dashboard dibuka
        $this->M_visit->save_visit();

        // Ambil data grafik kalau mau ditampilkan di dashboard
        $data['views'] = $this->M_visit->get_weekly_views();

		$data['title'] = 'PAUD TPA Athahira - Landing Page';
		$data['content'] =  $this->load->view('ortu/dashboard', $data, true);
		$this->load->view('ortu/layout/master', $data);
	}
}
