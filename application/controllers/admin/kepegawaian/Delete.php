<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delete extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

      public function delete()
    {
        $data['title'] = 'Kepegawaian - Hapus Pegawai';
        $data['content'] =  $this->load->view('admin/kepegawaian/delete', $data, true);
        $this->load->view('admin/layout/master', $data);
    }

}