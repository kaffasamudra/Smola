<?php
class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'PAUD TPA Athahira - Landing Page';
		$data['content'] =  $this->load->view('ortu/dashboard', $data, true);
		$this->load->view('ortu/layout/master', $data);
	}
}
