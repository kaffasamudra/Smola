<?php

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kepegawaian');
            $this->load->helper('url');
    }

    public function index()
    {
        $data['pegawai'] = $this->M_kepegawaian->get_all();
        $data['title'] = 'Kepegawaian - Data Pegawai';
        $data['content'] =  $this->load->view('admin/kepegawaian/index', $data, true);
        $this->load->view('admin/layout/master', $data);
    }
    
}
