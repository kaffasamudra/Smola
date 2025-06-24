<?php

class Kepegawaian extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kepegawaian - Index';
        $data['content'] =  $this->load->view('admin/kepegawaian/index', $data, true);
        $this->load->view('admin/layout/master', $data);
    }
    public function edit()
    {
        $data['title'] = 'Kepegawaian - Edit Page';
        $data['content'] =  $this->load->view('admin/kepegawaian/edit', $data, true);
        $this->load->view('admin/layout/master', $data);
    }
}

?>