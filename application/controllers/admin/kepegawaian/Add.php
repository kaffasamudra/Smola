<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

     public function add()
    {
        $data['title'] = 'Kepegawaian - Tambah Pegawai';
        $data['content'] =  $this->load->view('admin/kepegawaian/add', $data, true);
        $this->load->view('admin/layout/master', $data);
    }

}