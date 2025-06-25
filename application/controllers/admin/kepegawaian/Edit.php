<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function edit()
    {
        $data['title'] = 'Kepegawaian - Edit Pegawai';
        $data['content'] =  $this->load->view('admin/kepegawaian/edit', $data, true);
        $this->load->view('admin/layout/master', $data);
    }

}